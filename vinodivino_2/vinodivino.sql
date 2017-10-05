-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Creato il: Ott 05, 2017 alle 23:39
-- Versione del server: 10.1.25-MariaDB
-- Versione PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vinodivino`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `commenti`
--

CREATE TABLE `commenti` (
  `id` int(11) NOT NULL,
  `id_prodotto` int(11) NOT NULL,
  `commento` varchar(1000) NOT NULL,
  `utente` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `dettaglio_ordini`
--

CREATE TABLE `dettaglio_ordini` (
  `id_ordine` int(11) NOT NULL,
  `id_prodotto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `ordini`
--

CREATE TABLE `ordini` (
  `id` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `totale` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `prodotti`
--

CREATE TABLE `prodotti` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `produttore` varchar(45) NOT NULL,
  `regione` varchar(30) NOT NULL,
  `prezzo` float NOT NULL,
  `disponibile` int(11) NOT NULL DEFAULT '0',
  `immagine` varchar(45) NOT NULL,
  `descrizione` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `prodotti`
--

INSERT INTO `prodotti` (`id`, `nome`, `produttore`, `regione`, `prezzo`, `disponibile`, `immagine`, `descrizione`) VALUES
(1, 'Bardolino Superiore', 'Azienda Agricola Giarola', 'Veneto', 18, 22, '1.jpg', 'In provincia di Verona, in tutto o parte del territorio amministrativo di una quindicina di comuni, tra cui Bardolino, con le uve di Corvina veronese, localmente denominata Cruina o Corvina (35-80%, con una eventuale presenza massima del 20% della varietà Corvinone), di Rondinella (10-40%) e di Molinara (fino ad un massimo del 15%, possono concorrere inoltre alla produzione di detti vini, anche le uve provenienti dai vitigni a bacca rossa, non aromatici, ammessi alla coltivazione per la provincia di Verona, fino ad un massimo del 20% del totale, con un limite massimo del 10% per ogni singolo vitigno utilizzato), si produce questo vino dal colore rosso rubino, tendente al granato con l’invecchiamento; odore caratteristico con profumo delicato; sapore asciutto, sapido, leggermente amarognolo, armonico, a volte caratterizzato da leggero sentore di legno.\r\nGradazione minima: 12°.'),
(2, 'Cabernet Franc', 'Vitas', 'Friuli', 8, 4, '2.jpg', 'Le uve, vendemmiate a mano verso fine settembre-inizio ottobre, vengono diraspate e macerate sulle bucce fino al termine della fermentazione alcolica alla temperatura controllata di 22°C. Dopo la svinatura si lascia svolgere spontaneamente la fermentazione malolattica.'),
(3, 'Merlot Sassonero', 'Ca\' Lustra', 'Veneto', 12, 16, '3.jpg', 'Color marasca intenso, al naso inizia con note calde e speziate che schiudono alla finezza, un chiaro frutto di marasca e mora, spezie invitanti e deliziosi fiori di siepe; il gusto è morbido e avvolgente, delineato dai mirtilli, il tabacco e il sottobosco in una splendida espressione di persistenza. Il nome viene da una ripida collinetta sita in Arquà Petrarca.'),
(4, 'Vino Nobile di Montepulciano Gersemi', 'Fassati', 'Toscana', 22, 5, '4.jpg', 'Il Gersemi nasce dall’abbinamento di uve Sangiovese con uve Merlot e Cabernet Savignon provenienti dai migliori vigneti della Fassati, di età diversa e localizzati tra i 300 e 450 metri sul livello del mare, scelti per il loro microclima particolarmente favorevole.'),
(5, 'Barbera d\'Asti La Torre', 'Castello di Gabiano', 'Piemonte', 7, 6, '6.jpg', 'Dalle uve raccolte nei ripidi e soleggiati vigneti ad anfiteatro affacciati alla torre del Castello, nasce questo vino nobile, capace di trasmettere grandi emozioni.'),
(6, 'Friulano', 'Vitas', 'Friuli', 8, 9, '7.jpg', 'Le uve che danno origine a questo vino vengono raccolte a mano nella prima quindicina di settembre e vinificate in bianco con pressatura soffice. Segue la decantazione del mosto per 24 ore a 9° C e la fermentazione alcolica con controllo della temperatura a 18° C.'),
(7, 'Cerasuolo d\'Abruzzo', 'pippo', 'Abruzzo', 21, 3, '8.jpg', 'Intense note fruttate di pera, pesca e frutti tropicali caratterizzano questo bianco da sole uve Trebbiano prodotto nel cuore dell\'Abruzzo da una piccola cantina emergente'),
(8, 'Aglianico del Vulture ', 'Cantina di Venosa', 'Basilicata', 7.3, 0, '9.jpg', 'Profumo vinoso e delicato che ricorda vagamente la viola ed i frutti di bosco caratterizzano questo vino secco rosso prodotto nel cuore della Basilicata da una cooperativa attenta alla qualità.\r\n'),
(9, 'San Francesco Cirò', 'Fattoria San Francesco', 'Calabria', 6.78, 4, '10.jpg', 'Profumo speziato ed etereo, sapore secco, caldo ed equilibrato caratterizzano questo vino rosso prodotto nel cuore della Calabria da una delle aziende storiche della regione'),
(10, 'Falanghina Clarum', 'I Capitani', 'Campania', 8.8, 0, '11.jpg', 'Questo bianco si ottiene da una accurata selezione di uve di vitigni autoctoni: in massima parte Falanghina e in piccola parte Coda di Volpe. Dal colore giallo paglierino con riflessi dorati, è intenso e vivace, con spiccate note floreali e sentori di frutta fresca, morbido ed asciutto. '),
(11, 'Lambrusco Grasparossa', 'Fiorini', 'Emilia', 6.84, 4, '12.jpg', 'Un Lambrusco di qualità prodotto nel cuore dell\'Emilia da una cantina emergente, dall\'intenso profumo di viola'),
(12, 'Vermentino', 'Ramoino', 'Liguria', 10.53, 0, '13.jpg', 'Ottenuto in purezza dal vitigno vermentino, lievemente aromatico, fresco, ha profumo delicato e fruttato con sentori di mela, sapore mandorlato e sapido'),
(13, 'Verdicchio', 'Umani Ronchi', 'Marche', 7.87, 5, '14.jpg', 'Bouquet delicato ed elegante con sentori di frutta e fiori di campo caratterizzano questo bianco secco prodotto nel cuore delle Marche da una delle cantine storiche della regione'),
(14, 'Tintilia Macchiarossa', 'Cipressi', 'Molise', 20.11, 3, '15.jpg', 'Un raro vitigno autoctono vinificato in purezza dà origine a questo rosso dai profumi speziati con un sottofondo di amarene e frutti di bosco'),
(15, 'Grechetto Brigante', 'Tiburzi', 'Umbria', 32, 0, '16.jpg', 'Sentori di salvia e rosmarino, ottima mineralità e grande freschezza caratterizzano questo bianco prodotto da una giovane azienda che presto farà molto parlare di se');

-- --------------------------------------------------------

--
-- Struttura della tabella `utenti`
--

CREATE TABLE `utenti` (
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `cognome` varchar(30) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `indirizzo` varchar(80) DEFAULT NULL,
  `regione` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `utenti`
--

INSERT INTO `utenti` (`username`, `password`, `cognome`, `nome`, `indirizzo`, `regione`) VALUES
('', '', '', '', '', ''),
('peppiniello', 'ciao', 'Vives', 'Beppe', 'ciao', 'Calabbbbria'),
('peppuzzo', 'ciao', 'Rossi', 'Peppino', 'Via da li 3', 'Piemonte'),
('pippo', 'ciao', 'perano', 'simone', 'via genova 5', 'Piemonte'),
('root', 'ciao', 'Rossi', 'Pippo', 'Via vado 2', 'Piemonte'),
('vince', 'vince', 'Bellitta', 'Vincenzo', 'Via dei Mille 44', 'Piemonte');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `commenti`
--
ALTER TABLE `commenti`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_commenti_prodotto` (`id_prodotto`),
  ADD KEY `fk_commenti_utente` (`utente`);

--
-- Indici per le tabelle `dettaglio_ordini`
--
ALTER TABLE `dettaglio_ordini`
  ADD PRIMARY KEY (`id_ordine`,`id_prodotto`),
  ADD UNIQUE KEY `fk_dettaglio_ordine` (`id_ordine`),
  ADD UNIQUE KEY `fk_dettaglio_prodotto` (`id_prodotto`);

--
-- Indici per le tabelle `ordini`
--
ALTER TABLE `ordini`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_ordini_utente` (`username`);

--
-- Indici per le tabelle `prodotti`
--
ALTER TABLE `prodotti`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `utenti`
--
ALTER TABLE `utenti`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `commenti`
--
ALTER TABLE `commenti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT per la tabella `ordini`
--
ALTER TABLE `ordini`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT per la tabella `prodotti`
--
ALTER TABLE `prodotti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `commenti`
--
ALTER TABLE `commenti`
  ADD CONSTRAINT `fk_commenti_prodotto` FOREIGN KEY (`id_prodotto`) REFERENCES `prodotti` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_commenti_utente` FOREIGN KEY (`utente`) REFERENCES `utenti` (`username`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limiti per la tabella `dettaglio_ordini`
--
ALTER TABLE `dettaglio_ordini`
  ADD CONSTRAINT `fk_dettaglio_ordine` FOREIGN KEY (`id_ordine`) REFERENCES `ordini` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_dettaglio_prodotto` FOREIGN KEY (`id_prodotto`) REFERENCES `prodotti` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limiti per la tabella `ordini`
--
ALTER TABLE `ordini`
  ADD CONSTRAINT `fk_ordini_utente` FOREIGN KEY (`username`) REFERENCES `utenti` (`username`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
