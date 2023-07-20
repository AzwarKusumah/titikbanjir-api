<html>
<head>
 <title>Landing Page</title>
<style>
@import url('https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap');
@import url('https://use.fontawesome.com/releases/v5.15.4/css/all.css');

* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  font-family: 'Roboto', sans-serif;
  background: linear-gradient(135deg, #ff8c00, #ff4500);
}

.container {
  max-width: 1200px;
  margin: 0 auto;
}

.header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 20px;
}

.logo {
  width: 100px;
}

.nav {
  display: flex;
}

.nav-item {
  list-style: none;
  margin-left: 20px;
}

.nav-link {
  text-decoration: none;
  color: white;
  font-weight: bold;
}

.nav-link:hover {
   color :black; 
   transition :0.3s; 
}

.hero {
  height: 80vh;
  display: flex;
  align-items: center;
}

.hero-text {
   width :60%; 
   text-align :center; 
}

.hero-title {
   font-size :64px; 
   color :white; 
   font-weight :700; 
}

.hero-subtitle {
   font-size :32px; 
   color :white; 
   font-weight :300; 
}

.hero-button {
   display :inline-block; 
   padding :15px 25px; 
   margin-top:20px;
   background-color :white; 
   border-radius :10px; 
   color :#ff4500; 
   text-decoration :none; 
   font-weight :700; 
   transform :scale(1); 
   transition :0.3s; 
}

.hero-button:hover {
   transform :scale(1.1); 
}

.hero-image {
   width :40%; 
}

.image {
   width :100%; 
   border-radius :10px; 
}

.section {
   padding :40px; 
   border-radius :10px;
   margin-top :100px;
   margin-bottom :50px;
   background-color :white; 
}

.section-title {
   font-size :36px; 
   color :#ff4500; 
   text-align :center; 
}

.section-subtitle {
   font-size :18px;
   margin-top:30px; 
   color :black; 
   text-align :center; 
}

.section-text {
   margin-top :20px; 
}

.icon {
   width :50px; 
   height :50px; 
   margin-right :10px; 
   vertical-align :middle; 
}

.card-container {
    display:flex;
    justify-content:center;
    align-items:center;
    flex-wrap:wrap;
    gap:20px;
    margin-top:20px;

}
.card{
    width:300px;
    height:200px;
    border-radius:10px;
    box-shadow:5px 5px #ff4500;
    overflow:hidden;

}
.card-image{
    width:100%;
    height:100%;
    object-fit:cover;

}
.card:hover .card-image{
    transform:scale(1.1);
    transition:.3s;

}
</style>
</head>
<body>
<div class="container">
<div class="header">
<img src="img/logo.png" alt="Logo" class="logo">
<ul class="nav">
<li class="nav-item"><a href="/login" class="nav-link">Login</a></li>
<li class="nav-item"><a href="/register" class="nav-link">Register</a></li>
</ul>
</div>
<div class="hero">
    <div class="hero-text">
    <h1 class="hero-title">Informasi Banjir Makassar</h1>
    <p class="hero-subtitle">Website ini menyediakan REST API mengenai titik banjir yang ada di Makassar. Anda dapat mengaksesnya dengan mudah dan cepat.</p>
    <a href="/register" class="hero-button">Coba Sekarang</a>
    </div>
    <div class="hero-image">
    <img src="img/banjir.jpeg" alt="Flood" class="image">
    </div>
</div>
<div class="section">
<h2 class="section-title">Mengapa REST API ini dibuat?</h2>
<p class="section-subtitle">Beberapa tahun belakangan, Makassar mengalami banjir yang merugikan masyarakat. Banjir dapat menyebabkan kerusakan infrastruktur, gangguan transportasi, penyebaran penyakit, dan kerugian ekonomi.</p>
<p class="section-text"><i class="fas fa-tools icon" style></i>Kerusakan infrastruktur dapat mempengaruhi ketersediaan listrik, air bersih, telekomunikasi, dan fasilitas publik lainnya.</p>
<p class="section-text"><i class="fas fa-car icon"></i>Gangguan transportasi dapat menghambat mobilitas masyarakat, baik untuk keperluan pekerjaan, pendidikan, kesehatan, maupun sosial.</p>
<p class="section-text"><i class="fas fa-virus icon"></i>Penyebaran penyakit dapat terjadi akibat kontaminasi air banjir yang mengandung bakteri, virus, parasit, atau bahan kimia berbahaya.</p>
<p class="section-text"><i class="fas fa-money-bill-wave icon"></i>Kerugian ekonomi dapat terjadi akibat hilangnya aset, pendapatan, produksi, dan peluang bisnis.</p>
</div>
</div>
</body>
</html>
