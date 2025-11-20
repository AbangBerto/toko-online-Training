const express = require('express');
const path = require('path');
const app = express();

// Set EJS sebagai template engine
app.set('view engine', 'ejs');
app.set('views', path.join(__dirname, 'views'));

// Middleware untuk baca form
app.use(express.urlencoded({ extended: true }));

// Static files (jika nanti kamu punya css/js)
app.use(express.static('public'));

// Redirect ke halaman login
app.get('/', (req, res) => {
    res.redirect('/login');
});

// Tampilkan halaman login
app.get('/login', (req, res) => {
    res.render('login'); 
});

// Proses form login
app.post('/login', (req, res) => {
    const { email, password } = req.body;

    res.send(`Login attempt:
    <br>Email: ${email}
    <br>Password: ${password}`);
});

// Jalankan server
app.listen(3000, () => {
    console.log("Server running at http://localhost:3000/login");
});
