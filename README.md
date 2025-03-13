# 📌 Test Développeur Laravel – INVENTIV IT

## 📖 Description  
Ce projet est une **calculatrice Laravel** permettant d’effectuer des opérations de base : **addition, soustraction, multiplication et division**.  
L’objectif est de démontrer l’application des bonnes pratiques de développement en Laravel (**PSR-12, SOLID, DRY**).  

---

## 🚀 Fonctionnalités  
✅ Interface simple pour entrer deux nombres et choisir une opération.  
✅ Calcul du résultat avec affichage détaillé de l’opération.  
✅ Gestion des erreurs (ex. division par zéro).  
✅ Respect des conventions de développement (routes, contrôleurs, vues).  

---

## ⚙️ Installation et Exécution  

### 1️⃣ **Cloner le dépôt**  
```bash
git clone https://github.com/Laraibi/inventiv-it-test.git
cd inventiv-it-test
```

### 2️⃣ **Installer les dépendances**  
```bash
composer install
```

### 3️⃣ **Configurer l’application**  
Copier le fichier `.env.example` et créer un fichier `.env` :  
```bash
cp .env.example .env
```  
Générer la clé d’application :  
```bash
php artisan key:generate
```

### 4️⃣ **Lancer le serveur de développement**  
```bash
php artisan serve
```  
L’application sera accessible sur **http://127.0.0.1:8000/calculator**  

---

## 🏗️ Structure du projet  
📂 `app/Http/Controllers/CalculatorController.php` → Contrôleur gérant la logique de calcul.  
📂 `resources/views/calculator.blade.php` → Vue contenant le formulaire et l’affichage du résultat.  
📂 `routes/web.php` → Routes de l’application.  

---

## 🛠️ Technologies utilisées  
- **Laravel 12**  
- **PHP 8.2**  
- **Blade (templating Laravel)**  

---

## 📄 Réponses aux questions  
Les réponses aux questions théoriques sont disponibles dans le fichier **[suite.md](https://github.com/Laraibi/inventiv-it-test/blob/main/suite.md)**  

---

## 📩 Contact  
Développé par **Mehdi Laraibi (https://laraibi.com)** 
📧 meh.laraibi@gmail.com 

---

📌 **Merci de votre lecture et bonne évaluation !** 🚀  
