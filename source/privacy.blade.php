@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="About {{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="A little bit about {{ $page->siteName }}" />
@endpush

@push('scripts')
    <script>
        var el = document.getElementById('cntct');
        EmailObfuscate(el, {
          name: 'legal+privacy',
          domain: 'martinbetz',
          tld: 'com',
          altText: 'Email'
        });
    </script>
@endpush

@section('body')
    <h2 id="datenschutzerklrung">Datenschutzerklärung</h2>

<p>Diese Datenschutzerklärung klärt Sie über die Art, den Umfang und Zweck der Verarbeitung von personenbezogenen Daten (nachfolgend kurz „Daten“) im Rahmen der Erbringung unserer Leistungen sowie innerhalb unseres Onlineangebotes und der mit ihm verbundenen Webseiten, Funktionen und Inhalte sowie externen Onlinepräsenzen, wie z.B. unser Social Media Profile auf (nachfolgend gemeinsam bezeichnet als „Onlineangebot“). Im Hinblick auf die verwendeten Begrifflichkeiten, wie z.B. „Verarbeitung“ oder „Verantwortlicher“ verweisen wir auf die Definitionen im Art. 4 der Datenschutzgrundverordnung (DSGVO).</p>

<blockquote>
  <p>English: These are the rules for visitors from Germany. For international rules, please <a href="#">follow this link</a></p>
</blockquote>

<h3 id="verantwortlicher">Verantwortlicher</h3>

<p>Martin Betz <br>
c/o Factory Berlin <br>
Lohmühlenstraße 65/66 <br>
12435 Berlin <br>
<span id="cntct"></span>
</p>

<h3 id="artenderverarbeitetendaten">Arten der verarbeiteten Daten</h3>

<p>
<ul>
    <li>Bestandsdaten (z.B., Personen-Stammdaten, Namen oder Adressen)</li>
    <li>Kontaktdaten (z.B., E-Mail, Telefonnummern)</li>
    <li>Inhaltsdaten (z.B., Texteingaben, Fotografien, Videos)</li>
    <li>Nutzungsdaten (z.B., besuchte Webseiten, Interesse an Inhalten, Zugriffszeiten)</li>
    <li>Meta-/Kommunikationsdaten (z.B., Geräte-Informationen, IP-Adressen)</li>
</ul>
</p>

<h3 id="kategorienbetroffenerpersonen">Kategorien betroffener Personen</h3>

<p>Besucher und Nutzer des Onlineangebotes (Nachfolgend bezeichnen wir die betroffenen Personen zusammenfassend auch als „Nutzer“).</p>

<h3 id="zweckderverarbeitung">Zweck der Verarbeitung</h3>

<p>- Zurverfügungstellung des Onlineangebotes, seiner Funktionen und Inhalte.
- Beantwortung von Kontaktanfragen und Kommunikation mit Nutzern.
- Sicherheitsmaßnahmen.
- Reichweitenmessung/Marketing</p>

<h3 id="verwendetebegrifflichkeiten">Verwendete Begrifflichkeiten</h3>

<p>„Personenbezogene Daten“ sind alle Informationen, die sich auf eine identifizierte oder identifizierbare natürliche Person (im Folgenden „betroffene Person“) beziehen; als identifizierbar wird eine natürliche Person angesehen, die direkt oder indirekt, insbesondere mittels Zuordnung zu einer Kennung wie einem Namen, zu einer Kennnummer, zu Standortdaten, zu einer Online-Kennung (z.B. Cookie) oder zu einem oder mehreren besonderen Merkmalen identifiziert werden kann, die Ausdruck der physischen, physiologischen, genetischen, psychischen, wirtschaftlichen, kulturellen oder sozialen Identität dieser natürlichen Person sind.</p>

<p>„Verarbeitung“ ist jeder mit oder ohne Hilfe automatisierter Verfahren ausgeführte Vorgang oder jede solche Vorgangsreihe im Zusammenhang mit personenbezogenen Daten. Der Begriff reicht weit und umfasst praktisch jeden Umgang mit Daten.</p>

<p>„Pseudonymisierung“ die Verarbeitung personenbezogener Daten in einer Weise, dass die personenbezogenen Daten ohne Hinzuziehung zusätzlicher Informationen nicht mehr einer spezifischen betroffenen Person zugeordnet werden können, sofern diese zusätzlichen Informationen gesondert aufbewahrt werden und technischen und organisatorischen Maßnahmen unterliegen, die gewährleisten, dass die personenbezogenen Daten nicht einer identifizierten oder identifizierbaren natürlichen Person zugewiesen werden.</p>

<p>„Profiling“ jede Art der automatisierten Verarbeitung personenbezogener Daten, die darin besteht, dass diese personenbezogenen Daten verwendet werden, um bestimmte persönliche Aspekte, die sich auf eine natürliche Person beziehen, zu bewerten, insbesondere um Aspekte bezüglich Arbeitsleistung, wirtschaftliche Lage, Gesundheit, persönliche Vorlieben, Interessen, Zuverlässigkeit, Verhalten, Aufenthaltsort oder Ortswechsel dieser natürlichen Person zu analysieren oder vorherzusagen.</p>

<p>Als „Verantwortlicher“ wird die natürliche oder juristische Person, Behörde, Einrichtung oder andere Stelle, die allein oder gemeinsam mit anderen über die Zwecke und Mittel der Verarbeitung von personenbezogenen Daten entscheidet, bezeichnet.</p>

<p>„Auftragsverarbeiter“ eine natürliche oder juristische Person, Behörde, Einrichtung oder andere Stelle, die personenbezogene Daten im Auftrag des Verantwortlichen verarbeitet.</p>

<h3 id="mageblicherechtsgrundlagen">Maßgebliche Rechtsgrundlagen</h3>

<p>Nach Maßgabe des Art. 13 DSGVO teilen wir Ihnen die Rechtsgrundlagen unserer Datenverarbeitungen mit. Für Nutzer aus dem Geltungsbereich der Datenschutzgrundverordnung (DSGVO), d.h. der EU und des EWG gilt, sofern die Rechtsgrundlage in der Datenschutzerklärung nicht genannt wird, Folgendes:
Die Rechtsgrundlage für die Einholung von Einwilligungen ist Art. 6 Abs. 1 lit. a und Art. 7 DSGVO;
Die Rechtsgrundlage für die Verarbeitung zur Erfüllung unserer Leistungen und Durchführung vertraglicher Maßnahmen sowie Beantwortung von Anfragen ist Art. 6 Abs. 1 lit. b DSGVO;
Die Rechtsgrundlage für die Verarbeitung zur Erfüllung unserer rechtlichen Verpflichtungen ist Art. 6 Abs. 1 lit. c DSGVO;
Für den Fall, dass lebenswichtige Interessen der betroffenen Person oder einer anderen natürlichen Person eine Verarbeitung personenbezogener Daten erforderlich machen, dient Art. 6 Abs. 1 lit. d DSGVO als Rechtsgrundlage.
Die Rechtsgrundlage für die erforderliche Verarbeitung zur Wahrnehmung einer Aufgabe, die im öffentlichen Interesse liegt oder in Ausübung öffentlicher Gewalt erfolgt, die dem Verantwortlichen übertragen wurde ist Art. 6 Abs. 1 lit. e DSGVO.
Die Rechtsgrundlage für die Verarbeitung zur Wahrung unserer berechtigten Interessen ist Art. 6 Abs. 1 lit. f DSGVO.
Die Verarbeitung von Daten zu anderen Zwecken als denen, zu denen sie ehoben wurden, bestimmt sich nach den Vorgaben des Art 6 Abs. 4 DSGVO.
Die Verarbeitung von besonderen Kategorien von Daten (entsprechend Art. 9 Abs. 1 DSGVO) bestimmt sich nach den Vorgaben des Art. 9 Abs. 2 DSGVO.</p>

<h3 id="sicherheitsmanahmen">Sicherheitsmaßnahmen</h3>

<p>Wir treffen nach Maßgabe der gesetzlichen Vorgabenunter Berücksichtigung des Stands der Technik, der Implementierungskosten und der Art, des Umfangs, der Umstände und der Zwecke der Verarbeitung sowie der unterschiedlichen Eintrittswahrscheinlichkeit und Schwere des Risikos für die Rechte und Freiheiten natürlicher Personen, geeignete technische und organisatorische Maßnahmen, um ein dem Risiko angemessenes Schutzniveau zu gewährleisten.</p>

<p>Zu den Maßnahmen gehören insbesondere die Sicherung der Vertraulichkeit, Integrität und Verfügbarkeit von Daten durch Kontrolle des physischen Zugangs zu den Daten, als auch des sie betreffenden Zugriffs, der Eingabe, Weitergabe, der Sicherung der Verfügbarkeit und ihrer Trennung. Des Weiteren haben wir Verfahren eingerichtet, die eine Wahrnehmung von Betroffenenrechten, Löschung von Daten und Reaktion auf Gefährdung der Daten gewährleisten. Ferner berücksichtigen wir den Schutz personenbezogener Daten bereits bei der Entwicklung, bzw. Auswahl von Hardware, Software sowie Verfahren, entsprechend dem Prinzip des Datenschutzes durch Technikgestaltung und durch datenschutzfreundliche Voreinstellungen.</p>

<h3 id="zusammenarbeitmitauftragsverarbeiterngemeinsamverantwortlichenunddritten">Zusammenarbeit mit Auftragsverarbeitern, gemeinsam Verantwortlichen und Dritten</h3>

<p>Sofern wir im Rahmen unserer Verarbeitung Daten gegenüber anderen Personen und Unternehmen (Auftragsverarbeitern, gemeinsam Verantwortlichen oder Dritten) offenbaren, sie an diese übermitteln oder ihnen sonst Zugriff auf die Daten gewähren, erfolgt dies nur auf Grundlage einer gesetzlichen Erlaubnis (z.B. wenn eine Übermittlung der Daten an Dritte, wie an Zahlungsdienstleister, zur Vertragserfüllung erforderlich ist), Nutzer eingewilligt haben, eine rechtliche Verpflichtung dies vorsieht oder auf Grundlage unserer berechtigten Interessen (z.B. beim Einsatz von Beauftragten, Webhostern, etc.).</p>

<p>Sofern wir Daten anderen Unternehmen unserer Unternehmensgruppe offenbaren, übermitteln oder ihnen sonst den Zugriff gewähren, erfolgt dies insbesondere zu administrativen Zwecken als berechtigtes Interesse und darüberhinausgehend auf einer den gesetzlichen Vorgaben entsprechenden Grundlage.</p>

<h3 id="bermittlungenindrittlnder">Übermittlungen in Drittländer</h3>

<p>Sofern wir Daten in einem Drittland (d.h. außerhalb der Europäischen Union (EU), des Europäischen Wirtschaftsraums (EWR) oder der Schweizer Eidgenossenschaft) verarbeiten oder dies im Rahmen der Inanspruchnahme von Diensten Dritter oder Offenlegung, bzw. Übermittlung von Daten an andere Personen oder Unternehmen geschieht, erfolgt dies nur, wenn es zur Erfüllung unserer (vor)vertraglichen Pflichten, auf Grundlage Ihrer Einwilligung, aufgrund einer rechtlichen Verpflichtung oder auf Grundlage unserer berechtigten Interessen geschieht. Vorbehaltlich gesetzlicher oder vertraglicher Erlaubnisse, verarbeiten oder lassen wir die Daten in einem Drittland nur beim Vorliegen der gesetzlichen Voraussetzungen. D.h. die Verarbeitung erfolgt z.B. auf Grundlage besonderer Garantien, wie der offiziell anerkannten Feststellung eines der EU entsprechenden Datenschutzniveaus (z.B. für die USA durch das „Privacy Shield“) oder Beachtung offiziell anerkannter spezieller vertraglicher Verpflichtungen.</p>

<h3 id="rechtederbetroffenenpersonen">Rechte der betroffenen Personen</h3>

<p>Sie haben das Recht, eine Bestätigung darüber zu verlangen, ob betreffende Daten verarbeitet werden und auf Auskunft über diese Daten sowie auf weitere Informationen und Kopie der Daten entsprechend den gesetzlichen Vorgaben.</p>

<p>Sie haben entsprechend. den gesetzlichen Vorgaben das Recht, die Vervollständigung der Sie betreffenden Daten oder die Berichtigung der Sie betreffenden unrichtigen Daten zu verlangen.</p>

<p>Sie haben nach Maßgabe der gesetzlichen Vorgaben das Recht zu verlangen, dass betreffende Daten unverzüglich gelöscht werden, bzw. alternativ nach Maßgabe der gesetzlichen Vorgaben eine Einschränkung der Verarbeitung der Daten zu verlangen.</p>

<p>Sie haben das Recht zu verlangen, dass die Sie betreffenden Daten, die Sie uns bereitgestellt haben nach Maßgabe der gesetzlichen Vorgaben zu erhalten und deren Übermittlung an andere Verantwortliche zu fordern.</p>

<p>Sie haben ferner nach Maßgabe der gesetzlichen Vorgaben das Recht, eine Beschwerde bei der zuständigen Aufsichtsbehörde einzureichen.</p>

<h3 id="widerrufsrecht">Widerrufsrecht</h3>

<p>Sie haben das Recht, erteilte Einwilligungen mit Wirkung für die Zukunft zu widerrufen.</p>

<h3 id="widerspruchsrecht">Widerspruchsrecht</h3>

<p><strong>Sie können der künftigen Verarbeitung der Sie betreffenden Daten nach Maßgabe der gesetzlichen Vorgaben jederzeit widersprechen. Der Widerspruch kann insbesondere gegen die Verarbeitung für Zwecke der Direktwerbung erfolgen.</strong></p>

<h3 id="cookiesundwiderspruchsrechtbeidirektwerbung">Cookies und Widerspruchsrecht bei Direktwerbung</h3>

<p>Als „Cookies“ werden kleine Dateien bezeichnet, die auf Rechnern der Nutzer gespeichert werden. Innerhalb der Cookies können unterschiedliche Angaben gespeichert werden. Ein Cookie dient primär dazu, die Angaben zu einem Nutzer (bzw. dem Gerät auf dem das Cookie gespeichert ist) während oder auch nach seinem Besuch innerhalb eines Onlineangebotes zu speichern. Als temporäre Cookies, bzw. „Session-Cookies“ oder „transiente Cookies“, werden Cookies bezeichnet, die gelöscht werden, nachdem ein Nutzer ein Onlineangebot verlässt und seinen Browser schließt. In einem solchen Cookie kann z.B. der Inhalt eines Warenkorbs in einem Onlineshop oder ein Login-Status gespeichert werden. Als „permanent“ oder „persistent“ werden Cookies bezeichnet, die auch nach dem Schließen des Browsers gespeichert bleiben. So kann z.B. der Login-Status gespeichert werden, wenn die Nutzer diese nach mehreren Tagen aufsuchen. Ebenso können in einem solchen Cookie die Interessen der Nutzer gespeichert werden, die für Reichweitenmessung oder Marketingzwecke verwendet werden. Als „Third-Party-Cookie“ werden Cookies bezeichnet, die von anderen Anbietern als dem Verantwortlichen, der das Onlineangebot betreibt, angeboten werden (andernfalls, wenn es nur dessen Cookies sind spricht man von „First-Party Cookies“).</p>

<p>Wir können temporäre und permanente Cookies einsetzen und klären hierüber im Rahmen unserer Datenschutzerklärung auf.</p>

<p>Falls die Nutzer nicht möchten, dass Cookies auf ihrem Rechner gespeichert werden, werden sie gebeten die entsprechende Option in den Systemeinstellungen ihres Browsers zu deaktivieren. Gespeicherte Cookies können in den Systemeinstellungen des Browsers gelöscht werden. Der Ausschluss von Cookies kann zu Funktionseinschränkungen dieses Onlineangebotes führen.</p>

<p>Ein genereller Widerspruch gegen den Einsatz der zu Zwecken des Onlinemarketing eingesetzten Cookies kann bei einer Vielzahl der Dienste, vor allem im Fall des Trackings, über die US-amerikanische Seite <a href="http://www.aboutads.info/choices/">http://www.aboutads.info/choices/</a> oder die EU-Seite <a href="http://www.youronlinechoices.com/">http://www.youronlinechoices.com/</a> erklärt werden. Des Weiteren kann die Speicherung von Cookies mittels deren Abschaltung in den Einstellungen des Browsers erreicht werden. Bitte beachten Sie, dass dann gegebenenfalls nicht alle Funktionen dieses Onlineangebotes genutzt werden können.</p>

<h3 id="lschungvondaten">Löschung von Daten</h3>

<p>Die von uns verarbeiteten Daten werden nach Maßgabe der gesetzlichen Vorgaben gelöscht oder in ihrer Verarbeitung eingeschränkt. Sofern nicht im Rahmen dieser Datenschutzerklärung ausdrücklich angegeben, werden die bei uns gespeicherten Daten gelöscht, sobald sie für ihre Zweckbestimmung nicht mehr erforderlich sind und der Löschung keine gesetzlichen Aufbewahrungspflichten entgegenstehen.</p>

<p>Sofern die Daten nicht gelöscht werden, weil sie für andere und gesetzlich zulässige Zwecke erforderlich sind, wird deren Verarbeitung eingeschränkt. D.h. die Daten werden gesperrt und nicht für andere Zwecke verarbeitet. Das gilt z.B. für Daten, die aus handels- oder steuerrechtlichen Gründen aufbewahrt werden müssen.</p>

<h3 id="nderungenundaktualisierungenderdatenschutzerklrung">Änderungen und Aktualisierungen der Datenschutzerklärung</h3>

<p>Wir bitten Sie sich regelmäßig über den Inhalt unserer Datenschutzerklärung zu informieren. Wir passen die Datenschutzerklärung an, sobald die Änderungen der von uns durchgeführten Datenverarbeitungen dies erforderlich machen. Wir informieren Sie, sobald durch die Änderungen eine Mitwirkungshandlung Ihrerseits (z.B. Einwilligung) oder eine sonstige individuelle Benachrichtigung erforderlich wird.</p>

<h3 id="newsletter">Newsletter</h3>

<p>Mit den nachfolgenden Hinweisen informieren wir Sie über die Inhalte unseres Newsletters sowie das Anmelde-, Versand- und das statistische Auswertungsverfahren sowie Ihre Widerspruchsrechte auf. Indem Sie unseren Newsletter abonnieren, erklären Sie sich mit dem Empfang und den beschriebenen Verfahren einverstanden.</p>

<p>Inhalt des Newsletters: Wir versenden Newsletter, E-Mails und weitere elektronische Benachrichtigungen mit werblichen Informationen (nachfolgend „Newsletter“) nur mit der Einwilligung der Empfänger oder einer gesetzlichen Erlaubnis. Sofern im Rahmen einer Anmeldung zum Newsletter dessen Inhalte konkret umschrieben werden, sind sie für die Einwilligung der Nutzer maßgeblich. Im Übrigen enthalten unsere Newsletter Informationen zu unseren Leistungen und uns.</p>

<p>Double-Opt-In und Protokollierung: Die Anmeldung zu unserem Newsletter erfolgt in einem sog. Double-Opt-In-Verfahren. D.h. Sie erhalten nach der Anmeldung eine E-Mail, in der Sie um die Bestätigung Ihrer Anmeldung gebeten werden. Diese Bestätigung ist notwendig, damit sich niemand mit fremden E-Mailadressen anmelden kann. Die Anmeldungen zum Newsletter werden protokolliert, um den Anmeldeprozess entsprechend den rechtlichen Anforderungen nachweisen zu können. Hierzu gehört die Speicherung des Anmelde- und des Bestätigungszeitpunkts, als auch der IP-Adresse. Ebenso werden die Änderungen Ihrer bei dem Versanddienstleister gespeicherten Daten protokolliert.</p>

<p>Anmeldedaten: Um sich für den Newsletter anzumelden, reicht es aus, wenn Sie Ihre E-Mailadresse angeben. Optional bitten wir Sie einen Namen, zwecks persönlicher Ansprache im Newsletters anzugeben.</p>

<p>Der Versand des Newsletters und die mit ihm verbundene Erfolgsmessung erfolgen auf Grundlage einer Einwilligung der Empfänger gem. Art. 6 Abs. 1 lit. a, Art. 7 DSGVO i.V.m § 7 Abs. 2 Nr. 3 UWG oder falls eine Einwilligung nicht erforderlich ist, auf Grundlage unserer berechtigten Interessen am Direktmarketing gem. Art. 6 Abs. 1 lt. f. DSGVO i.V.m. § 7 Abs. 3 UWG.</p>

<p>Die Protokollierung des Anmeldeverfahrens erfolgt auf Grundlage unserer berechtigten Interessen gem. Art. 6 Abs. 1 lit. f DSGVO. Unser Interesse richtet sich auf den Einsatz eines nutzerfreundlichen sowie sicheren Newslettersystems, das sowohl unseren geschäftlichen Interessen dient, als auch den Erwartungen der Nutzer entspricht und uns ferner den Nachweis von Einwilligungen erlaubt.</p>

<p>Kündigung/Widerruf - Sie können den Empfang unseres Newsletters jederzeit kündigen, d.h. Ihre Einwilligungen widerrufen. Einen Link zur Kündigung des Newsletters finden Sie am Ende eines jeden Newsletters. Wir können die ausgetragenen E-Mailadressen bis zu drei Jahren auf Grundlage unserer berechtigten Interessen speichern bevor wir sie löschen, um eine ehemals gegebene Einwilligung nachweisen zu können. Die Verarbeitung dieser Daten wird auf den Zweck einer möglichen Abwehr von Ansprüchen beschränkt. Ein individueller Löschungsantrag ist jederzeit möglich, sofern zugleich das ehemalige Bestehen einer Einwilligung bestätigt wird.</p>

<h3 id="newsletterversanddienstleister">Newsletter - Versanddienstleister</h3>

<p>Der Versand der Newsletter erfolgt mittels des Versanddienstleisters [NAME, ADRESSE, LAND]. Die Datenschutzbestimmungen des Versanddienstleisters können Sie hier einsehen: [LINK ZU DEN DATENSCHUTZBESTIMMUNGEN]. Der Versanddienstleister wird auf Grundlage unserer berechtigten Interessen gem. Art. 6 Abs. 1 lit. f. DSGVO und eines Auftragsverarbeitungsvertrages gem. Art. 28 Abs. 3 S. 1 DSGVO eingesetzt.</p>

<p>Der Versanddienstleister kann die Daten der Empfänger in pseudonymer Form, d.h. ohne Zuordnung zu einem Nutzer, zur Optimierung oder Verbesserung der eigenen Services nutzen, z.B. zur technischen Optimierung des Versandes und der Darstellung der Newsletter oder für statistische Zwecke verwenden. Der Versanddienstleister nutzt die Daten unserer Newsletterempfänger jedoch nicht, um diese selbst anzuschreiben oder um die Daten an Dritte weiterzugeben.</p>

<h3 id="newslettererfolgsmessung">Newsletter - Erfolgsmessung</h3>

<p>Die Newsletter enthalten einen sog. „web-beacon“, d.h. eine pixelgroße Datei, die beim Öffnen des Newsletters von unserem Server, bzw. sofern wir einen Versanddienstleister einsetzen, von dessen Server abgerufen wird. Im Rahmen dieses Abrufs werden zunächst technische Informationen, wie Informationen zum Browser und Ihrem System, als auch Ihre IP-Adresse und Zeitpunkt des Abrufs erhoben.</p>

<p>Diese Informationen werden zur technischen Verbesserung der Services anhand der technischen Daten oder der Zielgruppen und ihres Leseverhaltens anhand derer Abruforte (die mit Hilfe der IP-Adresse bestimmbar sind) oder der Zugriffszeiten genutzt. Zu den statistischen Erhebungen gehört ebenfalls die Feststellung, ob die Newsletter geöffnet werden, wann sie geöffnet werden und welche Links geklickt werden. Diese Informationen können aus technischen Gründen zwar den einzelnen Newsletterempfängern zugeordnet werden. Es ist jedoch weder unser Bestreben, noch, sofern eingesetzt, das des Versanddienstleisters, einzelne Nutzer zu beobachten. Die Auswertungen dienen uns viel mehr dazu, die Lesegewohnheiten unserer Nutzer zu erkennen und unsere Inhalte auf sie anzupassen oder unterschiedliche Inhalte entsprechend den Interessen unserer Nutzer zu versenden.</p>

<p>Ein getrennter Widerruf der Erfolgsmessung ist leider nicht möglich, in diesem Fall muss das gesamte Newsletterabonnement gekündigt werden.</p>

<h3 id="hostingundemailversand">Hosting und E-Mail-Versand</h3>

<p>Die von uns in Anspruch genommenen Hosting-Leistungen dienen der Zurverfügungstellung der folgenden Leistungen: Infrastruktur- und Plattformdienstleistungen, Rechenkapazität, Speicherplatz und Datenbankdienste, E-Mail-Versand, Sicherheitsleistungen sowie technische Wartungsleistungen, die wir zum Zwecke des Betriebs dieses Onlineangebotes einsetzen.</p>

<p>Hierbei verarbeiten wir, bzw. unser Hostinganbieter Bestandsdaten, Kontaktdaten, Inhaltsdaten, Vertragsdaten, Nutzungsdaten, Meta- und Kommunikationsdaten von Kunden, Interessenten und Besuchern dieses Onlineangebotes auf Grundlage unserer berechtigten Interessen an einer effizienten und sicheren Zurverfügungstellung dieses Onlineangebotes gem. Art. 6 Abs. 1 lit. f DSGVO i.V.m. Art. 28 DSGVO (Abschluss Auftragsverarbeitungsvertrag).</p>

<h3 id="erhebungvonzugriffsdatenundlogfiles">Erhebung von Zugriffsdaten und Logfiles</h3>

<p>Wir, bzw. unser Hostinganbieter, erhebt auf Grundlage unserer berechtigten Interessen im Sinne des Art. 6 Abs. 1 lit. f. DSGVO Daten über jeden Zugriff auf den Server, auf dem sich dieser Dienst befindet (sogenannte Serverlogfiles). Zu den Zugriffsdaten gehören Name der abgerufenen Webseite, Datei, Datum und Uhrzeit des Abrufs, übertragene Datenmenge, Meldung über erfolgreichen Abruf, Browsertyp nebst Version, das Betriebssystem des Nutzers, Referrer URL (die zuvor besuchte Seite), IP-Adresse und der anfragende Provider.</p>

<p>Logfile-Informationen werden aus Sicherheitsgründen (z.B. zur Aufklärung von Missbrauchs- oder Betrugshandlungen) für die Dauer von maximal 7 Tagen gespeichert und danach gelöscht. Daten, deren weitere Aufbewahrung zu Beweiszwecken erforderlich ist, sind bis zur endgültigen Klärung des jeweiligen Vorfalls von der Löschung ausgenommen.</p>

<h3 id="reichweitenmessungmitmatomo">Reichweitenmessung mit Fathom</h3>

<p>Im Rahmen der Reichweitenanalyse von <a href="https://usefathom.com/" target="_blank">Fathom</a> werden auf Grundlage unserer berechtigten Interessen (d.h. Interesse an der Analyse, Optimierung und wirtschaftlichem Betrieb unseres Onlineangebotes im Sinne des Art. 6 Abs. 1 lit. f. DSGVO) die folgenden Daten verarbeitet: die Anzahl der Besuche, Ihre Verweildauer auf der Website. Die IP-Adresse der Nutzer wird nicht gespeichert.</p>

<p>Fathom sammelt Trends und Nutzungsüberblicke, nicht aber die persönlichen Details spezifischer Besucher.</p>

<p>Fathom verwendet Cookies, die auf dem Computer der Nutzer gespeichert werden und die eine Analyse der Benutzung unseres Onlineangebotes durch die Nutzer ermöglichen. Die Cookies haben eine Speicherdauer von 30 Minuten. Die durch das Cookie erzeugten Informationen über Ihre Benutzung dieser Webseite werden nur auf unserem Server gespeichert und nicht an Dritte weitergegeben.</p>

<p>Fathom folgt den "Do not track"-Einstellungen Ihres Browsers.</p>

<p>Mehr Informationen über die <a href="https://usefathom.com/data/" target="_blank">Analyse via Fathom</a>.</p>

@endsection
