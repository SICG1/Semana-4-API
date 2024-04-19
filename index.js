const express = require('express');
const app = express();

// Middleware para parsear el cuerpo de las peticiones JSON
app.use(express.json());

// Ejemplo de ruta GET
app.get('/', (req, res) => {
    res.send('¡Bienvenido a nuestra API REST!');
});

// Rutas adicionales podrían ser definidas aquí

// Configuración del servidor para escuchar en el puerto 1088
app.listen(1088, () => {
    console.log('Servidor corriendo en http://localhost:1088');
});
