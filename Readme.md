# 🛒 Bot de Supermercado en Telegram

Proyecto académico desarrollado para el módulo de **Automatización**, cuyo objetivo es implementar un bot en Telegram capaz de responder automáticamente la ubicación de productos dentro de un supermercado.

---

## 🤖 Descripción

Este bot permite a los usuarios consultar en qué pasillo se encuentran distintos productos, automatizando la atención mediante el uso de **PHP** y la **API de Telegram**.

El sistema simula un asistente virtual que responde de forma inmediata a las consultas, mejorando la experiencia del usuario y reduciendo tiempos de búsqueda.

---

## 🎯 Objetivo

Desarrollar una solución automatizada que permita:

- Responder consultas simples de usuarios  
- Automatizar procesos repetitivos  
- Aplicar lógica computacional en un bot real  
- Integrar Telegram con un servidor web  

---

## ⚙️ Tecnologías utilizadas

- 🐘 PHP 8.x  
- 🤖 Telegram Bot API  
- ☁️ Railway (despliegue)  
- 🧠 Lógica computacional  
- 🗂️ GitHub (control de versiones)  

---

## 🧠 Funcionamiento del sistema

El flujo del sistema es el siguiente:

1. El usuario envía un mensaje al bot en Telegram  
2. Telegram envía la información al servidor (webhook)  
3. El archivo `index.php` procesa el mensaje  
4. Se evalúan palabras clave  
5. El bot responde indicando el pasillo correspondiente  

---

## 🏬 Distribución de productos

| Pasillo | Productos |
|--------|----------|
| 🥩 Pasillo 1 | Carne, Queso, Jamón |
| 🥛 Pasillo 2 | Leche, Yogurth, Cereal |
| 🥤 Pasillo 3 | Bebidas, Jugos |
| 🍞 Pasillo 4 | Pan, Pasteles, Tortas |
| 🧼 Pasillo 5 | Detergente, Lavaloza |

---

## 💬 Ejemplos de uso

**Entrada del usuario → Respuesta del bot**

- `carne` → El producto se encuentra en el Pasillo 1  
- `leche` → El producto se encuentra en el Pasillo 2  
- `jugo` → El producto se encuentra en el Pasillo 3  
- `pan` → El producto se encuentra en el Pasillo 4  
- `detergente` → El producto se encuentra en el Pasillo 5  
- `cepillo` → No entiendo la pregunta  

---

## 🚀 Instalación y ejecución

1. Clonar el repositorio:
   git clone https://github.com/tu-usuario/bot-supermercado.git
2. Desplegar el proyecto en Railway o servidor compatible con PHP
3. Configurar variable de entorno:
   TELEGRAM_BOT_TOKEN=TU_TOKEN
4. Configurar el webhook:
   https://api.telegram.org/botTU_TOKEN/setWebhook?url=TU_URL
5. Probar el bot desde Telegram

## ⚠️ Consideraciones
El sistema funciona como backend, por lo que la página web puede mostrarse en blanco
El bot responde en base a palabras clave predefinidas
El token del bot no debe ser compartido públicamente

## 🔧 Posibles mejoras
Implementar botones interactivos
Integrar base de datos
Mejorar reconocimiento de lenguaje natural
Agregar más productos y categorías

## 👨‍💻 Autores
Proyecto desarrollado por:

Karla Pesce
Jaime Codoceo
Sergio Molina

## 📚 Contexto académico
Este proyecto fue desarrollado como parte del módulo de Introducción a la Automatización, aplicando conceptos de:
Automatización de procesos (RPA)
Bots y sistemas automatizados
Integración de aplicaciones mediante API

✨ Proyecto con fines educativos ✨