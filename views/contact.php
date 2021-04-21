<form action="<?= $url; ?>/contato" method="POST">
    <select name="_method">
        <option value="POST">POST</option>
        <option value="PUT">PUT</option>
        <option value="PATCH">PATCH</option>
        <option value="DELETE">DELETE</option>
    </select>

    <input type="text" name="first_name" value="Edvaldo" />
    <input type="text" name="last_name" value="Torres" />
    <input type="text" name="email" value="edvaldodev@gmail.com" />

    <button>Enviar</button>
</form>