# Strong Password Generator :lock: :key:

## Descrizione

Creare una pagina che permetta agli utenti di utilizzare il nostro generatore di password (abbastanza) sicure.

---

## Steps 
- Creare un form che invii in `GET` la `lunghezza` della password. Una nostra `funzione` utilizzerà questo dato per `generare` una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.
Scriviamo tutto (logica e layout) in un unico file `index.php`
- `Verificato` il corretto funzionamento del nostro codice, `spostiamo la logica` in un file *functions.php* che `includeremo` poi nella pagina principale
- Ivece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all’utente.
---
## Built with 

`HTML` | `PHP` | `CSS` | `Bootstrap` |