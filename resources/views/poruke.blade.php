@if (count($poruke)>0)
    <table>
        <tr>
            <td>Ime</td>
            <td>Poruka</td>
            <td>Šifra</td>
        </tr>
        @foreach ($poruke as $poruka)
            <tr>
                <td style="border: 1px solid black">{{$poruka->ime}}</td>
                <td style="border: 1px solid black">{{$poruka->poruka}}</td>
                <td style="border: 1px solid black">{{$poruka->sifra}}</td>
            </tr>
        @endforeach
    </table>
@endif