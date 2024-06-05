##### No. 0
Odpal projekt, masz zobaczyc napis : Connected to MySQL successfully
To pierwszy sukces.

jak chcesz wrzucić kod to wrzucaj go na GITHUB używający GITa na branch jakiś twój własny, czyli np:

        git checkout -b moj-branch # przejscie na twój branch
        git push origin HEAD # wrzucenie go do Github

##### No. 1 

Przygotuj mod rewrite w Apache2, tu coś możesz poczytać : https://phoenixnap.com/kb/mod-rewrite. 



Generalnie chodzi o to ,żeby wpisując w przeglądarce adres: _localhost:8000/jakas/moja/strona_
PHP interpretował to jako localhost:8000/index.php?$1=jakas/moja/strona (jest to róznica względem tego linku z góry jak coś!)


Wtedy masz już ładne adresowanie. Jest to jak coś troche kombinowania ale mi się kiedyś udało, jest to wykonalne :)

Pamiętaj, konfigurację musisz wrzucać do kontenera, używaj do tego volumenów (patrz w docker-compose.yml ,tam juz są identyczne przykłady).
Czyli jak gdzieś przeczytałeś ,że trzeba stworzyć jaki plik i wrzucić w katalog jakiś w Apache2, to tworzysz go lokalnie i dodajesz w docker-compose.
Pamiętaj o restart.

##### No. 2

Przygotuj mechanizm routingu. Chodzi o to ,że definiujesz sobie dozwolone routy, np:

          $routes = [
             '/jakas/moja/strona' => [JakisController::class, 'funkcjaKtoraMaSieWywolac']
         ]

I jeżeli router wykryje ,że trafiłeś na ten adres to odpali własnie ten callback.
Jak uda Ci się to ogarnąć to masz już elegancko dobrą bazę, reszta pójdzie gładko.
Jak zrobisz jeden działający to podsyłaj.
