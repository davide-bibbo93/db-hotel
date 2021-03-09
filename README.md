# Boolean - DB Hotel Exercise

## Esercizio diagramma:

Provare a strutturare il seguente database che modellizza un hotel:
Ci sono varie stanze, ognuna con le proprie caratteristiche.
Le diverse stanze vengono prenotate per periodi di tempo, da ospiti.
Ad ogni prenotazione devono essere associati tutti gli ospiti della stanza

## Esercizio query SQL:

In un file .txt inserite la traccia e la query SQL relativa.

E qui, tutte le query da eseguire.

-    Selezionare tutti gli ospiti
-    Selezionare tutti gli ospiti con document type = a CI
-    Selezionare i paganti che abbiano un ospite id associato
-    Selezionare tutte le stanze del primo piano
-    Selezionare tutti gli ospiti che iniziano per E
-    Selezionare tutti gli ospiti che abbiano meno di 30 anni
-    Seleziona tutte le prenotazioni precedenti a maggio 2018

-    Seleziona tutti gli ospiti che sono stati identificati con la carta di identità
-    Seleziona tutti gli ospiti che sono nati dopo il 1988
-    Seleziona tutti gli ospiti che hanno più di 20 anni (al momento dell’esecuzione della query)
-    Seleziona tutti gli ospiti il cui nome inizia con la D
-    Calcola il totale degli ordini accepted
-    Qual è il prezzo massimo pagato?
-    Seleziona gli ospiti riconosciuti con patente e nati nel 1975
-    Quanti paganti sono anche ospiti?
-    Quanti posti letto ha l’hotel in totale?

**Group by**

-    Conta gli ospiti raggruppandoli per anno di nascita
-    Somma i prezzi dei pagamenti raggruppandoli per status
-    Conta quante volte è stata prenotata ogni stanza
-    Fai una analisi per vedere se ci sono ore in cui le prenotazioni sono più frequenti
-    Quante prenotazioni ha fatto l’ospite che ha fatto più prenotazioni?

**Join**

-    Come si chiamano gli ospiti che hanno fatto più di due prenotazioni?
-    Stampare tutti gli ospiti per ogni prenotazione
-    Stampare Nome, Cognome, Prezzo e Pagante per tutte le prenotazioni fatte a Maggio 2018
-    Fai la somma di tutti i prezzi delle prenotazioni per le stanze del primo piano
-    Prendi i dati di fatturazione per la prenotazione con id=7
-    Le stanze sono state tutte prenotate almeno una volta? (Visualizzare le stanze non ancora prenotate)

**Bonus:**
Provate a connettervi utilizzando mysqli con il vostro database in locale.
