## Laravel und Tailwind

**[Laravel und Tailwind]()**

---

![Screenshot from Project](./public/img/homepage.png)

---
### About Project

Die Struktur meines Projekts sieht wie folgt aus:

1. Im Ordner resources/views habe ich alle Seiten wie „Startseite“, „Überuns“, „Kontakt“, und „Layout“ als separate Dateien abgelegt. Hier befinden sich auch die HTML-, CSS-, TailwindCSS- und JavaScript-Codes.
2. Im Ordner app/Http/Controllers habe ich die Dateien HomeController.php und ContactController.php erstellt. Diese Controller-Dateien werden in routes/web.php importiert, um die Seiten von dort aus zu verwalten. Mit den Funktionen, die ich im HomeController.php geschrieben habe, hole ich die Daten aus der Datenbank und sende sie an die entsprechenden Seiten im Ordner resources/views/, wo sie dann verwendet werden.
3. Ich habe eine Datenbank mit MySQL erstellt, die die Vornamen, Nachnamen und E-Mail-Adressen der Mitarbeiter enthält. Diese Daten werden dynamisch abgerufen und auf den Seiten „Startseite“ und „Überuns“ verwendet. Die Bilder, die auf diesen Seiten genutzt werden, sind im Ordner public/img gespeichert.
4. Mit den Funktionen, die ich im ContactController.php geschrieben habe, empfange ich die Daten aus dem Kontaktformular als $data. Anschließend wird eine E-Mail von der Seite gesendet. Nach erfolgreichem Versand der Nachricht wird die Seite auf resources/views/kontakt/message.blade.php umgeleitet.

5. Die E-Mail-Verarbeitung wird mit den Funktionen in app/Mail/ContactUs.php gesteuert.

### Developed With
#### Frontend
- [x] _Laravel_
- [x] _JavaScript_
- [x] _Tailwind_
- [x] _JQuery_
- [x] _Slider_
- [x] _CSS_

#### Backend
- [x] _MySQL_

---
### Contact

Mail: mehmetgokce61@gmail.com<br>
GitHub: https://github.com/Mehmet-Gkc/Laravel_Tailwind<br>

---
### Used Tools

- [Laravel](https://laravel.com/docs/11.x)
- [Tailwind](https://tailwindcss.com/docs/guides/laravel)
- [icons](https://ionic.io/ionicons)
- [npm](https://www.npmjs.com/)
- [JQuery](https://releases.jquery.com/)
- [Google Fonts](https://fonts.google.com/)
- [Visual Studio Code](https://code.visualstudio.com/)

---

Made with Mehmet Gökce