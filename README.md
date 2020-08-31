# Remote Training
E' un sito che permette ai trainer di semplificare la raccolta e la visione delle informazioni dei clienti a distanza in modo da semplificarne lo sviluppo delle schede e l'inoltro al cliente che potrà visionarla direttamente all'interno dell'applicazione.
# Requisiti per l'utilizzo
- Composer
- Artisan
- Xammp
- MySql
Per utilizzare il sito occorre avviare un server web nella macchina locale, si può utilizzare il comando "php artisan serve" o in alternativa avviare il server Apache tramite xampp. Avviare MySql da Xampp e nel file .env del progetto inserire l'indirizzo, il nome e i dati di accesso al DB.
# Installare le tabelle e i ruoli
Per installare le tabelle nel database basterà lanciare il comando "php artisan migrate" e successivamente si potranno inserire i ruoli necessari al funzionamento dell'applicazione nelle tabelle lanciando il comando "php artisan db:seed".
# Funzionalità
Il sito permette agli utenti di inserire tutte le infomarzioni necessarie al trainer per lo sviluppo di un protocollo di allenamento, di modificare le stesse nel corso del tempo e di poter leggere il proprio protocollo di allenamento caricato dal trainer.
Invece permette al trainer di visionare la lista di clienti, controllarne le informazioni e inoltrare il protocollo di allenamento.

# Autore
Progetto di Rabbito Paolo