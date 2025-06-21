# 🎬 Movies Website

A dynamic movie website built with HTML, CSS, JavaScript, PHP, and MySQL. This application allows users to browse, add, and manage a collection of movies through an intuitive interface.​

## 📸 Demo

![Screenshot](https://github.com/TareqAlKushari/Movies-Website/raw/main/Screenshot.png)
> Homepage displaying a list of movies.

Website is live at https://tareqalkushari.github.io/Movies-Website/
---

## 📌 Features

- Display a list of movies with details such as title, description, and poster.
- Admin panel to add, edit, and delete movie entries.
- Responsive design for optimal viewing on various devices.
- Separation of frontend (index-fe.html, movie-fe.html) and backend (index.php, movie.php) components.​

## 🛠️ Technologies Used

- **Frontend:** HTML5, CSS3, JavaScript
- **Backend:** PHP
- **Database:** MySQL​

## 🚀 Getting Started

### Prerequisites

- A web server environment (e.g., [XAMPP](https://www.apachefriends.org/), [WAMP](https://www.wampserver.com/), or [MAMP](https://www.mamp.inf/))
- PHP installed
- MySQL database​

### Installation

#### 1. Clone the repository:

```bash
git clone https://github.com/TareqAlKushari/Movies-Website.git
```

#### 2. Set up the database:

  - Create a new MySQL database (e.g., `movies_db`).
  - Import the SQL file located in the `SQL/` directory to set up the necessary tables.​

#### 3. Configure the database connection:

  - Open the PHP files (`index.php`, `movie.php`, etc.) and update the database connection parameters (`host`, `username`, `password`, `database`) to match your setup.​

#### 4. Run the application:

  - Place the project folder in your web server's root directory (e.g., `htdocs` for XAMPP).
  - Start your web server and navigate to `http://localhost/Movies-Website/index.php` in your browser.

## 📂 Project Structure

```plaintext
Movies-Website/
├── SQL/
│   └── movies_db.sql           # SQL script to set up the database
├── admin/
│   └── ...                     # Admin panel files for managing movies
├── layout/
│   └── ...                     # Common layout components (e.g., header, footer)
├── index-fe.html               # Frontend homepage (static)
├── movie-fe.html               # Frontend movie details page (static)
├── index.php                   # Backend homepage (dynamic)
├── movie.php                   # Backend movie details page (dynamic)
├── Screenshot.png              # Screenshot of the application
└── README.md                   # Project documentation
```

## 🤝 Contributing

Contributions are welcome! If you have suggestions or improvements, feel free to fork the repository and submit a pull request.​

## 📬 Contact

For any inquiries or feedback, please contact [Tareq Al-Kushari](https://github.com/TareqAlKushari).

> Note: This project is intended for educational purposes and may not include all security and scalability considerations for a production environment.​

## Author 🙋‍♂️

**Tareq Al-Kushari**   [GitHub](https://github.com/TareqAlKushari) • [LinkedIn](https://www.linkedin.com/) • [Facebook](https://www.facebook.com/profile.php?id=61562736475116&mibextid=ZbWKwL) • [Instagram](https://www.instagram.com/tareq.al.kushari?igsh=MTBhZjRuYnFoMWw1YQ==) • [X](https://x.com/Al_Kushari?t=gU61bcmlDbtf3KV4kqGULA&s=09) • [Email](mailto:tareq.al.kushari@gmail.com) • [Portfolio Website](#)

## License 📜

This project is open-source and available under the [MIT License](LICENSE).

---

> If you found this helpful, don't forget to **star** the repo and share it with others! ⭐
