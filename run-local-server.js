const http = require('http');
const fs = require('fs');
const path = require('path');

const root = path.resolve(__dirname);
const rootPrefix = root.endsWith(path.sep) ? root : root + path.sep;
const port = 4000;
const host = '127.0.0.1';

const mime = {
  '.html': 'text/html; charset=utf-8',
  '.php': 'text/html; charset=utf-8',
  '.css': 'text/css; charset=utf-8',
  '.js': 'application/javascript; charset=utf-8',
  '.svg': 'image/svg+xml',
  '.jpg': 'image/jpeg',
  '.jpeg': 'image/jpeg',
  '.webp': 'image/webp',
  '.png': 'image/png',
  '.ico': 'image/x-icon',
  '.json': 'application/json; charset=utf-8',
  '.txt': 'text/plain; charset=utf-8',
};

function sendFile(res, file) {
  const ext = path.extname(file).toLowerCase();
  res.writeHead(200, { 'Content-Type': mime[ext] || 'application/octet-stream' });
  fs.createReadStream(file).pipe(res);
}

http.createServer((req, res) => {
  let requestPath = decodeURIComponent((req.url || '/').split('?')[0]);
  if (!requestPath || requestPath === '/') {
    requestPath = '/index.html';
  }

  let file = path.resolve(root, '.' + requestPath);

  if (file !== root && !file.startsWith(rootPrefix)) {
    res.writeHead(403, { 'Content-Type': 'text/plain; charset=utf-8' });
    res.end('Forbidden');
    return;
  }

  try {
    if (fs.statSync(file).isDirectory()) {
      file = path.join(file, 'index.html');
    }
  } catch {}

  // This lightweight server cannot execute PHP. Serve the matching static
  // page whenever one exists so links such as index.php keep working during
  // local preview instead of exposing the PHP source as a blank page.
  if (path.extname(file).toLowerCase() === '.php') {
    const htmlFallback = file.replace(/\.php$/i, '.html');
    if (fs.existsSync(htmlFallback)) {
      file = htmlFallback;
    }
  }

  if (!fs.existsSync(file)) {
    res.writeHead(404, { 'Content-Type': 'text/plain; charset=utf-8' });
    res.end('Not Found');
    return;
  }

  sendFile(res, file);
}).listen(port, host, () => {
  console.log(`Server running on http://${host}:${port}`);
});
