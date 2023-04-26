    Nombre:
    <input type="text" name="name" id="name" value="{{ isset($produ)?$produ->name:'' }}"
/><br />

    Descripcion:
    <input type="text" name="description" id="description" value="{{ isset($produ)?$produc->description:'' }}"
/><br />

    precio:
    <input type="number" name="price" id="price" value="{{ isset($produ)?$produ->price:'' }}"
/><br />
    <button type="submit">Guardar</button>