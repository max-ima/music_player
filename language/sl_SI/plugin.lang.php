<?php
$lang['lien_titre'] = 'Poslušanje glasbe';
$lang['lien_expl'] = 'Pokaži pojavno okno vdelanega predvajalnik';

$lang['mp_evidence_title'] = 'Informacije';
$lang['mp_evidence_txt'] = 'Galerija ima predvajalnik glasbe. Ali ga želite pokazati ?';
$lang['mp_evidence_2'] = 'Zapomni si.';

$lang['mp_montre'] = 'Pokaži sezname predvajanja';
$lang['mp_cache'] = 'Skrij sezname predvajanja';

$lang['mp_send'] = 'Pošlji';
$lang['mp_need_help'] = "Potrebujete pomoč ?";

$lang['mp_help_q1'] = "Kam dati mp3 ?";
$lang['mp_help_q2'] = "Dodal sem mp3, vendar jih nisem našel na seznamu predvajanja !";
$lang['mp_help_q3'] = "Kaj pomeni 'Pokaži sličico na seznamu predvajanja' ?";
$lang['mp_help_q4'] = "Kako deluje ta vtičnik ?";
$lang['mp_help_q5'] = "Kako lahko dodam oddaljeni mp3 ali lokaliziran v druge mape ?";
$lang['mp_help_q6'] = "Ali je mogoče dodati podcast ?";
$lang['mp_help_q7'] = "Tukaj ne najdem odgovorov / Imam nekaj težav";
$lang['mp_help_q8'] = "Novo: omejite lahko dostop predvajalnika";

$lang['mp_help_div1'] = "Mp3 je treba vstaviti v mapo Glasba vtičnika, kot je ta \"[PWG mapa]/plugins/music_player/music/[nov seznam predvajanja]/\". Svoje sezname predvajanja razvrstite po izvajalcu (music/moby/go.pm3), ali vstavite umetnikovo grivo neposredno v ime datoteke (music/electro/moby-go.pm3)";
$lang['mp_help_div2'] = "Svojega seznama predvajanja ne posodabljate: kliknite 2. ikono ('Upravljanje glasbe') blizu seznama predvajanja, nato v zadnjem koraku naredite 'Pošlji spremembe'";
$lang['mp_help_div3'] = "Gre za sličico, ki jo lahko vstavite: 3. ikona ('Upravljajte sličico') blizu seznama predvajanja";
$lang['mp_help_div4'] = "Ta vtičnik omogoča ustvarjanje in upravljanje nekaterih seznamov predvajanja, personalizacijo predvajalnika glasbe in njegovega pojavnega okna.<br />
Če želite ustvariti seznam predvajanja :
<br />- Najprej potrebujete mapo /music v mapi vtičnika. POMEMBNO !! (Brezplačni uporabniki, naj vas to naslednje obvestilo ne skrbi) /music mapa mora imeti vsa pooblastila za pisanje/branje (chmod 777 ali rwxrwxrwx).
<br />- Nato v /music ustvarite drugo mapo, ki bo vsebovala mp3 in seznam predvajanja s pripono .xml. Bodite previdni : ime mape je pomembno : ZATO NE UPORABLJAJTE POSEBNIH ZNAKOV za ime mape
<br />- Nato kliknite na 'Sinhroniziraj z /music' : mape v /music so bile navedene z datotekami mp3. Seznami predvajanja z razširitvijo xml so bili ustvarjeni z istim imenom mape.
<br />- sprejem obrazca: uporablja se za majhno opisno besedilo, ki bo uporabljeno kot povezava za predvajanje seznama predvajanja v oknu predvajalnika. Pustite prazno besedilo polja in zadevno predvajanje ne bo zabeleženo v podatkovni bazi
<br />- pošiljanje obrazca in vpis v bazo podatkov: potem lahko dodate miniaturo z nalaganjem ali povezavo: lahko jo celo pošljete neposredno po ftp-ju za ime '[ime datoteke] .jpg'?
<br /><br />
Za upravljanje seznama predvajanja :
<br />- Kliknite 2. ikono blizu seznama predvajanja
<br />- Nato sledite tem korakom: Ne pozabite zadnjega !";
$lang['mp_help_div5'] = "Da : za to pojdite na izbrani seznam predvajanja in v drugem koraku dodajte svojo datoteko. Bodite previdni : tudi če je mp3 na istem strežniku kot ta vtičnik, morate napisati celoten naslov z http://";
$lang['mp_help_div6'] = "Da : Od 1.3 je bil dodan blok za podcast in oddaljeni seznam predvajanja. Bodite previdni : seznam predvajanja mora biti v formatu Atom, Xspf (uporablja ga vtičnik) ali RSS. (podcast je vedno RSS)";
$lang['mp_help_div7'] = 'Tukaj lahko najdete podporo za vtičnike : <a href="https://piwigo.org/forum/viewtopic.php?id=16456" target="_blank"> https://piwigo.org/forum/viewtopic.php?id=16456</a>';
$lang['mp_help_div8'] = "Novo : lahko omejite dostop predvajalnika. Če ustvarite skupino 'music_group', bodo glasbo lahko poslušali samo člani te skupine. Če ne obstaja (privzeti primer), lahko vsakdo dostopa do predvajalnika";


$lang['mp_admin_leg'] = 'Upravitelj seznama predvajanja';
$lang['mp_admin_tt_synchro'] = 'Sinhronizirajte z mapo /music';
$lang['mp_admin_folder'] = 'Mapa';
$lang['mp_admin_nm_pl'] = 'Ime seznama predvajanja';
$lang['mp_admin_nm_edit'] = 'Uredi ime';
$lang['mp_admin_pl'] = 'Upravljanje glasbe';
$lang['mp_admin_min'] = 'Upravljajte sličico';
$lang['mp_admin_leg1'] = 'Podcast (RSS) ali oddaljeni seznam predvajanja';

$lang['mp_admin_leg2'] = 'Možnost vtičnika';
$lang['mp_admin_2_opt1'] = 'Razkrit vtičnik z blokom v menijski vrstici';
$lang['mp_admin_2_opt2'] = 'Pokaži "glavo"';
$lang['mp_admin_2_opt3'] = 'Pokaži "nogo", avtorske pravice (copyright)';
$lang['mp_admin_2_opt4'] = 'Pojavno okno (Pop_up)';
$lang['mp_admin_2_opt4_1'] = 'višina';
$lang['mp_admin_2_opt4_2'] = 'širina';

$lang['mp_admin_leg3'] = 'Možnost predvajalnika';
$lang['mp_admin_3_opt1_1'] = 'skupna višina';
$lang['mp_admin_3_opt1_2'] = 'skupna širina';
$lang['mp_admin_3_opt2_1'] = 'višina seznama predvajanja';
$lang['mp_admin_3_opt2_2'] = "<b>[Informacije : Če je sličica vklopljena, je višina seznama predvajanja in 20 px (slikovnih pik) vrstice enaka skupni višini.]</b>";
$lang['mp_admin_3_opt3_1'] = 'Pokaži sličico seznama predvajanja';
$lang['mp_admin_3_opt3_2'] = 'širina sličice';
$lang['mp_admin_3_opt3_3'] = "<b>[Informacije : Če je sličica vklopljena in če je njena širina < skupne širine, bo sličica prikazana na levi (privzeto).]</b>";
$lang['mp_admin_3_opt4'] = 'Glasbo preberite naključno';
$lang['mp_admin_3_opt5'] = 'Ponovite seznam predvajanja, ko je končano';
$lang['mp_admin_3_opt6'] = 'Preberite ta seznam predvajanja na začetku';
$lang['mp_admin_3_opt7'] = "Samodejno zaženi seznam predvajanja (brez stranske vrstice)";
$lang['mp_admin_3_opt9'] = "Slog je uporabljen privzeto : ";
$lang['mp_admin_3_opt9b'] = "ne spreminjaj";
$lang['mp_admin_3_opt10'] = "Aktivirajte samodejno upravljanje slogov: slogi, uporabljeni za predvajalnik, bodo slogi uporabnika. Če je ta možnost deaktivirana ali če slog uporabnika za predvajalnik ne obstaja, je uporabljena tema tista, ki je predhodno privzeta";



$lang['mp_adm_envoi_1'] = 'Opis za';
$lang['mp_adm_envoi_2'] = 'vsebuje';

$lang['mp_adm_return'] = 'Nazaj na sezname predvajanja';
$lang['mp_adm_return_2'] = 'Nazaj na seznam predvajanja';

$lang['mp_adm_edit_1'] = 'Besedilo opisa';
$lang['mp_adm_edit_2'] = 'Seznam predvajanja';
$lang['mp_adm_edit_3'] = 'Sinhronizirajte seznam predvajanja';

$lang['mp_ou'] = 'ALI';
$lang['mp_adm_info_img'] = "(dodaj novo sliko izbriši staro)";

$lang['mp_adm_suppr_1'] = 'Kaj želite narediti  ?';
$lang['mp_adm_suppr_2'] = 'Izbriši seznam predvajanja samo iz baze podatkov (z mojo naslednjo sinhronizacijo bo ponovno ustvarjena)';
$lang['mp_adm_suppr_3'] = 'Izbriši seznam predvajanja baze podatkov IN mapo (datoteke mp3, xml bodo izbrisane)';


$lang['mp_msg_suppr1'] = 'Mapa je uspešno izbrisana';
$lang['mp_msg_suppr2'] = 'Napaka : mapa ni izbrisana';
$lang['mp_msg_suppr3'] = 'Baza podatkov je bila uspešno izbrisana';
$lang['mp_msg_edit1'] = 'Uredi v redu';
$lang['mp_msg_edit2'] = "Seznam predvajanja posodobljen !";
$lang['mp_msg_edit3'] = "vrstica spremenjena !";
$lang['mp_msg_edit4'] = "Odstrani iz baze podatkov :";
$lang['mp_msg_edit5'] = "Odstrani iz :";

$lang['mp_adm_etape_1'] = "Prvi korak (neobvezno)";
$lang['mp_adm_et1_txt'] = 'V mapo ste dodali ali odstranili nekaj datotek mp3 ? Če je odgovor Da, morate sinhronizirati z bazo podatkov: ';
$lang['mp_adm_etape_2'] = "Drugi korak (neobvezno)";
$lang['mp_adm_et2_txt'] = "Dodajte oddaljeni mp3.";
$lang['mp_adm_et2_nbr'] = "Število dodanih : ";
$lang['mp_adm_et2_rg'] = "Vstavite vrstico : ";
$lang['mp_adm_et2_rg2'] = "(če je prazno, na dnu seznama predvajanja)";
$lang['mp_adm_etape_3'] = "Tretji korak !";
$lang['mp_adm_thead1'] = "IME";
$lang['mp_adm_thead2'] = "URL";
$lang['mp_adm_thead3'] = "GOR";
$lang['mp_adm_thead4'] = "DOL";
$lang['mp_adm_thead5'] = "Spremenite url/ime";
$lang['mp_adm_thead6'] = "Izbriši";
$lang['mp_adm_etape_4'] = "Četrti korak !";
$lang['mp_adm_et4_txt'] = "Naredite seznam predvajanja .xml";
$lang['mp_adm_et4_ok'] = "Pošljite spremembe";

$lang['mp_adm_ed_sup_ok'] = "Ali ste prepričani ?";
$lang['mp_adm_ed_sup_info'] = "Če gre za datoteko mape '/music', bo izbrisana: v nasprotnem primeru bo izbrisan samo vnos v bazo podatkov.";


$lang['mp_msg_err_aj1'] = "Napaka: polje url prazno";
$lang['mp_msg_err_aj2'] = "Napaka: besedilo polja je prazno";


$lang['mp_msg_admin1'] = 'Ni dodano';
$lang['mp_msg_admin_3_1'] = 'Datoteka';
$lang['mp_msg_admin_3_2'] = 'Ustvarjeno';
$lang['mp_msg_admin_4'] = 'Dodano od';
$lang['mp_msg_admin_5'] = 'Konfiguracija predvajalnika glasbe je shranjena';
$lang['mp_msg_admin_6'] = 'Konfiguracija vtičnika je shranjena';

$lang['mp_uploadimg_ok'] = 'Slika je shranjena';
$lang['mp_linkimg_ok'] = 'Slika je shranjena';
$lang['mp_info_min']="[ Sličica ni obvezna. ]";

$lang['mp_text_no_autorisation']="Ni vam dovoljeno poslušati glasbe! Obrnite se na skrbnika spletnega mesta, če želite izvedeti, zakaj, in morda, da vam dovoli";

