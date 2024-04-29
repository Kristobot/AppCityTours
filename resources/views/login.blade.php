<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.0.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="logion.css" />
    <title>Web Design Mastery | Travel.Io</title>
    @vite('resources/css/logion.css')
  </head>
  <body>
    <nav>
      <div class="nav__logo"><a href="#">AppCityTour</a></div>
     
      <div class="search__box">
        <input type="text" placeholder="Buscar" />
        <i class="ri-search-line"></i>
      </div>
    </nav>

    <div class="container">
      <div class="container__left">
        <div class="content">
          <h1>Maravillas<br />del Peru!</h1>
          <p>
            ¡Bienvenido a la experiencia más emocionante de tu vida! Con nuestra guía turística, te embarcarás
            en un viaje inolvidable lleno de descubrimientos, aventuras y momentos que te robarán el aliento. 
            Nuestra guía turística es tu compañera experta, lista para llevarte a los rincones más fascinantes 
            y sorprendentes de nuestro destino.
          </p>
          <div class="btns">
            <button class="read__more">Informacion</button>
            <button class="our__blogs">Nuestros blogs</button>
          </div>
          <div class="chevrons">
            <span class="chev__left">
              <i class="ri-arrow-left-s-line"></i>
            </span>
            <span class="chev__right">
              <i class="ri-arrow-right-s-line"></i>
            </span>
          </div>
        </div>
      </div>
      <div class="container__right">
        <form>
          <h4>¡Bienvenido a AppCityTour!</h4>
          <div class="form__group">
            <label for="destination">Login</label>
            <input
              type="email"
              name="destination"
              id="destination"
              placeholder=""
              required
            />
          </div>
          <div class="form__group">
            <label for="date">Contraseña</label>
            <input type="password" name="date" id="date" placeholder="" required />
          </div>
          <button type="submit">Iniciar sesion</button>
        </form>
      </div>
    </div>
  </body>
</html>
