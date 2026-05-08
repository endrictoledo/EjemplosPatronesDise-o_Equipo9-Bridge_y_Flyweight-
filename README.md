Patrones que se implementan: Bridge y Flyweight
Bridge
qué problema resuelve cada ejemplo
cómo ejecutar el proyecto del patrón Bridge: Paso 1, hay que iniciar Laragon, paso 2, ingresar esta dirección en nuestro navegador: http://localhost  , paso 3 ejecutar nuestro código desde VS code desde la carpeta www en la ruta C:\laragon\www, paso 4, revisar el resultado del código en el navegador.
Versiones:
  Lenguaje: php-8.3.30-Win32-vs16-x64
  Framework: Enterprise Architect 15.2.1554 (Build: 1554) - Unicode
  Herramientas adicionales usadas: 
  Visual Studio Code Versión: 1.118.1 (user setup)
  Laragon 2026 v8.6.1 
Dependencias: PHP Intelephense v1.18.0
Comandos necesarios para ejecutar ejemplos: MAIN?

Flyweight
El codigo es una abstraccion del porblema de falta de memoria RAM debido a un uso excesivo de clases completas, separando la clase en su estado intrínseco(el que no cambia y se comparte) y su estado extrínseco(el que si cambia y es único), con esto la parte compartida y la arbolFlyweight, que en este caso sera la parte gráfica y que pesa mas en memoria, solo se crea una vez y las clase conntexto, es decir ArbolContexto unicamente tiene el apartado de posicion y una referencia al flyweight, con ello se ahorra la instanciacion de 2000 clases completas pesadas, y con ello logramos tener la parte pesada una sola vez en memoria y las posiciones en otras clases ligeras.

Para ejecutar a nivel localHost en un navegador poner la direccion: http://localhost/Proyectos/ejemploProyecto.php

Versiónes:
  Lenguaje: php-8.2.12
  Framework: Enterprise Architect 15.2.1554 (Build: 1554) - Unicode
  Herramientas adicionales usadas:
    Visual Studio Code Versión: v1.119.0 (user setup)
    XAMPP Control Panel v3.3.0
  Dependencias: PHP Intelephense v1.18.2, PHP IntelliSense v1.3.3, PHP Server v3.0.2
