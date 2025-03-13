# Test Développeur Laravel – INVENTIV IT

## 🚀 Partie 2 : Réponses aux Questions

### 1️⃣ Quel est le rôle des files d'attente et du traitement en arrière-plan dans Laravel ?  
Les **files d’attente** permettent d’exécuter des tâches en arrière-plan afin d’optimiser les performances d’une application. Elles sont utilisées pour :  
- L’envoi d’e-mails  
- Le traitement d’images  
- L’exécution de tâches lourdes (exports, reporting, etc.)  

---

### 2️⃣ Comment configurer et gérer les files d’attente pour le traitement des tâches chronophages ?  

#### **Configuration des files d’attente**  
Laravel prend en charge plusieurs **drivers** : `sync`, `database`, `redis`, `sqs`.  

1. **Configuration**  
   Modifier `.env` pour utiliser **database** comme driver :  
   ```env
   QUEUE_CONNECTION=database
   ```

2. **Créer la table des jobs**  
   ```bash
   php artisan queue:table
   php artisan migrate
   ```

3. **Créer une classe de job**  
   ```bash
   php artisan make:job ProcessTask
   ```

4. **Ajouter du code dans `app/Jobs/ProcessTask.php`**  
   ```php
   public function handle()
   {
       // Traitement de la tâche
   }
   ```

5. **Lancer le worker pour exécuter les jobs**  
   ```bash
   php artisan queue:work
   ```

---

### 3️⃣ Quels sont les avantages des files d’attente par rapport au traitement synchrone ?  
✅ **Performance améliorée** : les tâches lourdes s’exécutent en arrière-plan.  
✅ **Meilleure expérience utilisateur** : pas d’attente lors de l’exécution des requêtes.  
✅ **Scalabilité** : possibilité de répartir la charge sur plusieurs workers.  
✅ **Fiabilité** : Laravel permet de relancer les jobs échoués (`queue:retry`).  

---

### 4️⃣ Cycle de vie d'une classe de travail (job) dans Laravel  
Un job suit plusieurs étapes :  

1. **Dispatch** :  
   ```php
   dispatch(new ProcessTask());
   ```

2. **Stockage dans la file d’attente**  
3. **Traitement par un worker (`queue:work`)**  
4. **Suppression après exécution ou tentative de réexécution si erreur**  

📌 **Détails techniques** : Les jobs sont enregistrés dans les **fournisseurs de services**, comme dans `AppServiceProvider.php`, via `Queue::before()` et `Queue::after()`.  

---

### 5️⃣ Comment traiter un grand volume d'enregistrements en base de données avec Eloquent ?  
**❌ Mauvaise approche** :  
```php
$users = User::all(); // Charge tout en mémoire ❌
foreach ($users as $user) {
    // Traitement
}
```

**✅ Bonne approche : utilisation de `chunk()`**  
```php
User::chunk(100, function ($users) {
    foreach ($users as $user) {
        // Traitement
    }
});
```
✅ Évite la surcharge mémoire et optimise l’exécution.  

---

### 6️⃣ Projet le plus important sur lequel j’ai travaillé  
J’ai travaillé sur **EDPS**, un projet Laravel pour un client italien.  
📌 **Ma contribution principale** :  
- Développement de l’API Backend en **Laravel 10**  
- Gestion des **cibles de livraison** et des **tâches automatisées**  
- Intégration d’une solution de **tracking en temps réel**  
- Optimisation des **requêtes SQL pour améliorer la performance**  

---

### 7️⃣ Utilisation des tests automatisés  
📌 **Outils utilisés** :  
✅ PHPUnit (tests unitaires)  
✅ Laravel Dusk (tests fonctionnels)  
✅ PestPHP (tests modernes et concis)  

📌 **Exemple de test unitaire avec PHPUnit** :  
```php
public function testCalculatorAddition()
{
    $response = $this->post('/calculator/calculate', [
        'number1' => 5,
        'number2' => 10,
        'operation' => 'add'
    ]);

    $response->assertSee('Résultat: 5 + 10 = 15');
}
```

---

### 🎯 Conclusion  
J’espère que ce test reflète ma façon de travailler avec Laravel en respectant les bonnes pratiques (PSR-12, DRY, SOLID).  
J’attends avec impatience un retour et une discussion technique ! 😊  
