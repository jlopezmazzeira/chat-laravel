Configuraciones ambiente:
  sudo apt-get install php7.0-mbstring

  sudo apt-get install php-xml

  sudo apt-get install php7.0-zip

  sudo apt-get install curl

  curl -sS https://getcomposer.org/installer | sudo php -- --install-dir=/usr/local/bin --filename=composer

  sudo chown -R $USER ~/.composer/

  composer global require "laravel/installer"

  echo 'export PATH="$HOME/.composer/vendor/bin:$PATH"' >> ~/.bashrc
  source ~/.bashrc

  echo 'export PATH="$HOME/.composer/vendor/bin:$PATH"' >>  ~/.zshrc
  source ~/.zshrc

Para crear un proyecto en Laravel hacemos lo siguiente:
  laravel new nombreProyecto

Instalar dependencias
  npm install

Instalar Bootstrap
  npm install bootstrap

Configurar Bootstrap
  Ir al directorio resources/sass y modificar el archivo app.scss y
  colocar la siguiente línea @import 'node_modules/bootstrap/scss/bootstrap.scss';

Configurar Proyecto
  Colocar las siguientes líneas en la vista principal
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script src="{{ asset('js/app.js') }}"></script>
  y también debemos colocarle el id="app" al div principal de la aplicación
  
Correr Proyecto
  php artisan serve

Correr el comando 'npm run dev' en otra ventana
Correr el comando 'npm run watch' en otra ventana
