@extends('layouts.app')

@section('main')
<main>
    <form class="" action="" method="post">
        <input type="text" name="title" value="" placeholder="Titolo">
        <input type="text" name="description" value=""placeholder="Descrizione">
        <input type="text" name="src" value=""placeholder="Link poster">
        <input type="number" name="price" value=""placeholder="Prezzo">
        <input type="text" name="series" value=""placeholder="Serie">
        <input type="date" name="sale_date"placeholder="Data di vendita">
        <input type="text" name="type" value=""placeholder="Tipo">
        <input type="submit" name="" value="Invia">
    </form>
</main>


@endsection
