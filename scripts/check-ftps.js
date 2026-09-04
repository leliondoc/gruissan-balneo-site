// Vérification sans identifiant : AUTH TLS et certificat, avant tout transfert.
const net = require('node:net');
const tls = require('node:tls');
const host = process.argv[2] || process.env.FTP_SERVER;
if (!host || !/^[a-z\d.-]+$/i.test(host)) throw new Error('Nom de serveur FTP manquant ou invalide.');

const socket = net.createConnection({ host, port: 21 });
let buffer = '';
let waitingForTls = false;
let secureSocket;
const timeout = setTimeout(() => fail(new Error('Vérification FTPS expirée.')), 15000);
function fail(error) {
  clearTimeout(timeout);
  socket.destroy();
  secureSocket?.destroy();
  console.error(`FTPS refusé : ${error.code || error.message}`);
  process.exitCode = 1;
}
socket.on('error', fail);
socket.on('data', function readReply(chunk) {
  buffer += chunk.toString('utf8');
  const lines = buffer.split('\r\n');
  buffer = lines.pop();
  for (const line of lines) {
    if (!waitingForTls && /^220 /.test(line)) {
      waitingForTls = true;
      socket.write('AUTH TLS\r\n');
    } else if (waitingForTls && /^234 /.test(line)) {
      socket.removeListener('data', readReply);
      secureSocket = tls.connect({ socket, servername: host, rejectUnauthorized: true });
      secureSocket.on('error', fail);
      secureSocket.once('secureConnect', () => {
        clearTimeout(timeout);
        console.log(`FTPS disponible : certificat vérifié, ${secureSocket.getProtocol()}. Aucun identifiant transmis.`);
        secureSocket.end('QUIT\r\n');
      });
    } else if (/^[45]\d\d /.test(line)) {
      fail(new Error(`Le serveur refuse la négociation (${line.slice(0, 3)}).`));
    }
  }
});
