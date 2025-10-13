# My Profile 🚀
Un perfil personal moderno y responsive construido con PHP, HTML, CSS y JavaScript, containerizado con Docker.

# Características
Diseño moderno - Interfaz limpia y profesional con efectos visuales atractivos

Completamente responsive - Se adapta a dispositivos móviles y desktop

Navegación por pestañas - Interfaz intuitiva con transiciones suaves

# Múltiples secciones:

👤 Perfil personal con stack tecnológico

🎵 Playlist de música favorita

🎬 Maratón de películas

🍣 Menú foodie favorito

📅 Gestión de eventos

✈️ Próximos viajes

# Tecnologías Utilizadas
Backend: PHP 8.3

Frontend: HTML5, CSS3 con variables CSS, JavaScript ES6+

Servidor: Apache

Containerización: Docker & Docker Compose

Estilo: Diseño moderno con gradientes, sombras y transiciones

# Instalación y Ejecución
Prerrequisitos
Docker

Docker Compose

# Pasos para ejecutar
Clonar el repositorio

git clone https://github.com/tu-usuario/my-profile.git
cd my-profile
Ejecutar con Docker Compose


docker-compose up
Abrir en el navegador


http://localhost:8081

🐛 Solución de Problemas
Los estilos no se cargan
Verificar que los paths en header.php tengan / al inicio

Confirmar que la carpeta assets esté en la ubicación correcta

PHP no procesa
Verificar que el contenedor esté ejecutándose

Revisar logs: docker-compose logs app

Puerto ocupado
Cambiar el puerto en docker-compose.yml:

yaml
ports:
  - "8082:80"  # Cambiar 8081 por otro puerto
📝 Comandos Útiles
bash
# Iniciar la aplicación
docker-compose up

# Iniciar en segundo plano
docker-compose up -d

# Detener la aplicación
docker-compose down

# Ver logs
docker-compose logs -f

# Reconstruir contenedores
docker-compose up --build

# Licencia
Este proyecto es de uso educativo y personal.

¡Listo para usar! 🎉 Ejecuta docker-compose up y visita http://localhost:8081 para ver tu perfil en acción.


