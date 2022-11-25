<h2>Kapcsolat</h2>
    <form name="kapcsolat" action="./?oldal=urlapelkuld" method="POST" onsubmit="return ellenoriz();">
        <div>
            <!--<input type="hidden" name="oldal" value="urlapelkuld">-->
            <label>Név (minimum 5 karakter): <input type="text" id="nev" name="nev" size="20" maxlength="40"></label>
            <br/>
            <label>E-mail (kötelező): <input type="text" id="email" name="email" size="30" maxlength="40"></label>
            <br/>
            <label>Üzenet (kötelező): <textarea id="szoveg" name="szoveg" cols="40" rows="10"></textarea></label>
            <br/>
            <input id="kuld" type="submit" value="Küld">
            <button onclick="ellenoriz();" type="button">Ellenőriz</button>
        </div>
    </form>
    <script src="js/main.js"></script>
