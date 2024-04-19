// app.js o server.js
const express = require('express');
const swaggerUi = require('swagger-ui-express');
const swaggerDocument = require('./swagger.json');
const morgan = require('morgan');

const app = express();
const port = 3000;

// Middleware para registrar las solicitudes HTTP
app.use(morgan('combined'));

// Swagger UI setup
app.use('/api-docs', swaggerUi.serve, swaggerUi.setup(swaggerDocument));

// Endpoint para obtener los horarios
app.get('/horarios', (req, res) => {
  res.json([{ fecha: "2024-04-20", hora: "09:00", estado: "reservado" }]);
});

// Iniciar el servidor
app.listen(port, () => {
  console.log(`Servidor ejecutándose en http://localhost:${port}`);
});
