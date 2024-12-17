<?php

class scriptController {
    //PAG-PRINCIPAL
    private $cssFiles = [];
    private $jsFiles = [];
    private $favicons = [];
    //
    private $cssFiles01 = [];
    private $jsFiles01 = [];
    private $favicons01 = [];
    //
    private $cssFiles02 = [];
    private $jsFiles02 = [];
    private $favicons02 = [];
    //
    private $cssFiles03 = [];
    private $jsFiles03 = [];
    private $favicons03 = [];
    //
    private $cssFiles04 = [];
    private $jsFiles04 = [];
    private $favicons04 = [];
    //
    private $cssFiles05 = [];
    private $jsFiles05 = [];
    private $favicons05 = [];

    public function __construct() {
        // PAGINA00 - PAGINA PRINCIPAL

        // Inicializar con los archivos CSS y JS
        $this->cssFiles = [
            'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css',
            'https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap',
            'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css',
            'https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css',
            'https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css',
            'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css',
            'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css',
            'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css',
            'assets/css/menu.css'
            
        ];

        $this->jsFiles = [
            'https://code.jquery.com/jquery-3.6.0.min.js',
            'https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js',
            'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js',
            'assets/js/animacion.js',
            'assets/js/gestion_anim.js',
            'assets/js/user.js'
        ];

         // Inicializar favicons
         $this->favicons = [
            'assets/img/ia2.png' => 'icon',
            'assets/img/apple-touch-icon.png' => 'apple-touch-icon'
        ];

        // PAGINA01 - PRODUCTOS
        
        $this->cssFiles01 = [
            'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css',
            'https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap',
            'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css',
            'https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css',
            'https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css',
            'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css',
            'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css',
            'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css',
            '../../assets/css/producto.css'
            
        ];

        $this->jsFiles01 = [
            'https://code.jquery.com/jquery-3.6.0.min.js',
            'https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js',
            'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js',
            '../../assets/js/gestion_anim.js',
            '../../assets/js/user.js'
        ];

         // Inicializar favicons
         $this->favicons01 = [
            
            'assets/img/apple-touch-icon.png' => 'apple-touch-icon'
        ];

        // PAGINA02 - EXPECIALISTA EN EXCEL

        $this->cssFiles02 = [
            'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css',
            'https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap',
            'https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css',
            'https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css',
            'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css',
            'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css',
            'https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css',
            'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css',
            '../../assets/css/cliente.css'
            
        ];

        $this->jsFiles02 = [
            'https://code.jquery.com/jquery-3.6.0.min.js',
            'https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js',
            'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js',
            'assets/js/carrucel.js',
            '../../assets/js/user.js'
        ];

         // Inicializar favicons
         $this->favicons02 = [
            
            'assets/img/apple-touch-icon.png' => 'apple-touch-icon'
        ];

        // PAGINA03 - CAJERO BANCARIO Y COMERCIAL

        $this->cssFiles03 = [
            'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css',
            'https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap',
            'https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css',
            'https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css',
            'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css',
            'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css',
            'https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css',
            'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css',
            'assets/css/cajero.css'
            
        ];

        $this->jsFiles03 = [
            'https://code.jquery.com/jquery-3.6.0.min.js',
            'https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js',
            'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js',
            'assets/js/carrucel.js',
            '../assets/js/menu.js'
        ];

         // Inicializar favicons
         $this->favicons03 = [
            
            'assets/img/apple-touch-icon.png' => 'apple-touch-icon'
        ];
        
        // PAGINA04 - SAP BUSINESS ONE

        $this->cssFiles04 = [
            'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css',
            'https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap',
            'https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css',
            'https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css',
            'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css',
            'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css',
            'https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css',
            'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css',
            'assets/css/sap.css'
            
        ];

        $this->jsFiles04 = [
            'https://code.jquery.com/jquery-3.6.0.min.js',
            'https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js',
            'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js',
            'assets/js/carrucel.js',
            '../assets/js/menu.js'
        ];

         // Inicializar favicons
         $this->favicons04 = [
            
            'assets/img/apple-touch-icon.png' => 'apple-touch-icon'
        ];

        // PAGINA05 - POLITICAS DE PRIVACIDAD

        $this->cssFiles05 = [
            'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css',
            'https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap',
            'https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css',
            'https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css',
            'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css',
            'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css',
            'https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css',
            'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css',
            'assets/css/politicas.css'
            
        ];

        $this->jsFiles05 = [
            'https://code.jquery.com/jquery-3.6.0.min.js',
            'https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js',
            'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js',
            'assets/js/carrucel.js',
            '../assets/js/menu.js'
        ];

         // Inicializar favicons
         $this->favicons05 = [
            
            'assets/img/apple-touch-icon.png' => 'apple-touch-icon'
        ];

        // PAGINA06 - TERMINOS Y CONDICIONES

        $this->cssFiles06 = [
            'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css',
            'https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap',
            'https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css',
            'https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css',
            'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css',
            'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css',
            'https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css',
            'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css',
            'assets/css/terminos.css'
            
        ];

        $this->jsFiles06 = [
            'https://code.jquery.com/jquery-3.6.0.min.js',
            'https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js',
            'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js',
            'assets/js/carrucel.js',
            '../assets/js/menu.js'
        ];

         // Inicializar favicons
         $this->favicons06 = [
            
            'assets/img/apple-touch-icon.png' => 'apple-touch-icon'
        ];

    }

    public function getCssLinks() {
        $links = '';
        foreach ($this->cssFiles as $file) {
            $links .= "<link href=\"$file\" rel=\"stylesheet\">\n";
        }
        return $links;
    }

    public function getJsScripts() {
        $scripts = '';
        foreach ($this->jsFiles as $file) {
            $scripts .= "<script src=\"$file\"></script>\n";
        }
        return $scripts;
    }

    public function getFavicons() {
      $favicons = '';
      foreach ($this->favicons as $file => $rel) {
          $favicons .= "<link href=\"$file\" rel=\"$rel\">\n";
      }
      return $favicons;
    }

    // PAGINA01 - COMPUTACION E INFORMATICA
    public function getCssLinks01() {
        $links = '';
        foreach ($this->cssFiles01 as $file) {
            $links .= "<link href=\"$file\" rel=\"stylesheet\">\n";
        }
        return $links;
    }

    public function getJsScripts01() {
        $scripts = '';
        foreach ($this->jsFiles01 as $file) {
            $scripts .= "<script src=\"$file\"></script>\n";
        }
        return $scripts;
    }

    public function getFavicons01() {
      $favicons = '';
      foreach ($this->favicons01 as $file => $rel) {
          $favicons .= "<link href=\"$file\" rel=\"$rel\">\n";
      }
      return $favicons;
    }

    // PAGINA02 - EXPECIALISTA EN EXCEL
    public function getCssLinks02() {
        $links = '';
        foreach ($this->cssFiles02 as $file) {
            $links .= "<link href=\"$file\" rel=\"stylesheet\">\n";
        }
        return $links;
    }

    public function getJsScripts02() {
        $scripts = '';
        foreach ($this->jsFiles02 as $file) {
            $scripts .= "<script src=\"$file\"></script>\n";
        }
        return $scripts;
    }

    public function getFavicons02() {
      $favicons = '';
      foreach ($this->favicons02 as $file => $rel) {
          $favicons .= "<link href=\"$file\" rel=\"$rel\">\n";
      }
      return $favicons;
    }

    // PAGINA03 - CAJERO BANCARIO Y COMERCIAL
    public function getCssLinks03() {
        $links = '';
        foreach ($this->cssFiles03 as $file) {
            $links .= "<link href=\"$file\" rel=\"stylesheet\">\n";
        }
        return $links;
    }

    public function getJsScripts03() {
        $scripts = '';
        foreach ($this->jsFiles03 as $file) {
            $scripts .= "<script src=\"$file\"></script>\n";
        }
        return $scripts;
    }

    public function getFavicons03() {
      $favicons = '';
      foreach ($this->favicons03 as $file => $rel) {
          $favicons .= "<link href=\"$file\" rel=\"$rel\">\n";
      }
      return $favicons;
    }

    // PAGINA04 - SAP BUSINESS ONE
    public function getCssLinks04() {
        $links = '';
        foreach ($this->cssFiles04 as $file) {
            $links .= "<link href=\"$file\" rel=\"stylesheet\">\n";
        }
        return $links;
    }

    public function getJsScripts04() {
        $scripts = '';
        foreach ($this->jsFiles04 as $file) {
            $scripts .= "<script src=\"$file\"></script>\n";
        }
        return $scripts;
    }

    public function getFavicons04() {
      $favicons = '';
      foreach ($this->favicons04 as $file => $rel) {
          $favicons .= "<link href=\"$file\" rel=\"$rel\">\n";
      }
      return $favicons;
    }

    // PAGINA05 - POLITICAS DE PRIVACIDAD
    public function getCssLinks05() {
        $links = '';
        foreach ($this->cssFiles05 as $file) {
            $links .= "<link href=\"$file\" rel=\"stylesheet\">\n";
        }
        return $links;
    }

    public function getJsScripts05() {
        $scripts = '';
        foreach ($this->jsFiles05 as $file) {
            $scripts .= "<script src=\"$file\"></script>\n";
        }
        return $scripts;
    }

    public function getFavicons05() {
      $favicons = '';
      foreach ($this->favicons05 as $file => $rel) {
          $favicons .= "<link href=\"$file\" rel=\"$rel\">\n";
      }
      return $favicons;
    }

    // PAGINA06 - TERMINOS Y CONDICIONES
    public function getCssLinks06() {
        $links = '';
        foreach ($this->cssFiles06 as $file) {
            $links .= "<link href=\"$file\" rel=\"stylesheet\">\n";
        }
        return $links;
    }

    public function getJsScripts06() {
        $scripts = '';
        foreach ($this->jsFiles06 as $file) {
            $scripts .= "<script src=\"$file\"></script>\n";
        }
        return $scripts;
    }

    public function getFavicons06() {
      $favicons = '';
      foreach ($this->favicons06 as $file => $rel) {
          $favicons .= "<link href=\"$file\" rel=\"$rel\">\n";
      }
      return $favicons;
    }
}

?>
