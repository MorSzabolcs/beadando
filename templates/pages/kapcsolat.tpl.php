<h2>Kapcsolat</h2>
    <form name="kapcsolat" action="./?oldal=urlapelkuld" method="POST">
        <div>
            <!--<input type="hidden" name="oldal" value="urlapelkuld">-->
            <label>Név (minimum 5 karakter): <input type="text" id="nev" name="nev" size="20" maxlength="40" required minlength = "5"></label>
            <br/>
            <label>E-mail (kötelező): <input type="text" id="email" name="email" size="30" maxlength="40" required pattern = "[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"></label>
            <br/>
            <label>Üzenet (kötelező): <textarea id="szoveg" name="szoveg" cols="40" rows="10" required></textarea></label>
            <br/>
            <input id="kuld" type="submit" value="Küld">
        </div>
    </form>
