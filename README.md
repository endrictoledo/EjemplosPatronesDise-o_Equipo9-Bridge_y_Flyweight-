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
El codigo es una abstraccion del problema de falta de memoria RAM debido a un uso excesivo de clases completas con componentes gráficos, se realiza una separación a la clase en su estado intrínseco(el que no cambia y se comparte) y su estado extrínseco(el que si cambia y es único), con esto la parte compartida (ArbolFlyweight), que en este caso sera la parte gráfica y que pesa mas en memoria, solo se crea una vez y las clase del contexto y cambiante (ArbolContexto) unicamente tiene el apartado de posicion y una referencia al flyweight, con ello se ahorra la instanciación de 2000 clases completas pesadas, y con ello logramos tener la parte pesada una sola vez en memoria y las posiciones en otras clases ligeras.

Para ejecutar a nivel localHost: 
1.- Descargar XAMPP, este funcionara como servidor local, al instalarlo configurara solo lo necesario(el servidor Apache principalmente).
2.- Dentro de los archivos de la carpeta XAMPP, creada por defecto en la raiz de disco c:/xampp, tenemos que encontrar la carpeta htdocs, esta carpeta sirve para para que el servidor Apache pueda ejecutar archivos; una vez en la carpeta debemos de mover el archivo ejemploExposicionFlyweight.php dentro. Esto permite que el servidor pueda leer y ejecutar el archivo. 
3.- Antes de interntar ejecutar el archivo se tiene que encender el servidor, se entra a XAMPP Control Panel, el ejecutable que se descarga automaticamente, y dentro seleciconamos en el apartado de Apache "Start", con ello si se pone en verde se iniciara el servidor. NOTA: si no funciona puede que los puertos que ocupe XAMPP esten siendo ocupados por otros programas, en tal caso se debe entrar a la configuracion(boton config) y cambiar el puerto por otro(buscar "Listen 80" y "ServerName localhost:80" y en ambos carbiar el numero, guardar y volver a iniciar Apache). 
4.- Ya con esto podemos ver el resultado en el navegador, no se abre directamente, se tiene que ejecutar a traves de una URL localhost, normalmente sigue la estructura:
  http://localhost/ejemploExposicionFlyweight.php
En caso de tener el archivo dentro de alguna carpeta dentro de htdocs se tendrá que poner la carpeta:
  http://localhost/carpeta/ejemploExposicionFlyweight.php
Con estos pasos debería poder vizualizarse el el navegador el "Bosque" que se busca representar a través del patron Flyweight.

Versiónes:
  Lenguaje: php-8.2.12
  Framework: N/A
  Herramienta de desarrollo:
    Visual Studio Code Versión: v1.119.0 (user setup)
  Herramientas adicionales usadas:
    Enterprise Architect 15.2.1554 (Build: 1554) - Unicode
    XAMPP Control Panel v3.3.0
  Dependencias: N/A
