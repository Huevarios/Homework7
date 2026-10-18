# Homework 7 — Grades (Laravel 7)

A personal grade tracker using Laravel 7 and MySQL. Manage subjects and their graded activities (Homework, Activity, Quick Test, Midterm, Final Exam, Project, Other). Create, view, edit and delete subjects and activities. Grades use a 0–100 scale, with optional notes.

## Setup (Windows + XAMPP)

1. Extract this folder to `ClassApplications/grades`.
2. Start **Apache** and **MySQL** in XAMPP.
3. Create a MySQL database named `grades_hw7` using phpMyAdmin.
4. From the `grades` directory, run `composer install` (if `vendor` is not already installed).
5. Run `copy .env.example .env` in PowerShell (`Copy-Item .env.example .env`), then `php artisan key:generate`.
6. In `.env`, set `DB_DATABASE=grades_hw7`, `DB_USERNAME=root`, and `DB_PASSWORD=` (blank), as appropriate for your XAMPP configuration.
7. Run `php artisan migrate` and `php artisan serve`.
8. Open `http://127.0.0.1:8000/subjects`.

The project is based on the same Laravel 7 structure and Bootstrap styling as the classroom CRUD example. Dependencies (`vendor` and `node_modules`) are intentionally excluded.
