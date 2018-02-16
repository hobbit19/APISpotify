
<div class="row">
    <div class="col-md-12">
        <h1 class="titlebox">{{ $numberOfTracks }} reproductions &middot; {{ $numberOfAlbums }} albums
            &middot; {{ $numberOfArtists }} artists</h1>
    </div>

</div>


<div class="row">
    <div class="col-md-1">
        <h1 class="top1">#1</h1>
    </div>
    <div class="col-md-2">
        <img src="{{ $tracks[0]->album->images[1]->url }}"
             alt="{{ $tracks[0]->album->name }}"
             class="img-fluid rounded">
    </div>

    <div class="col-md-2">

         <h4>{{ $tracks[0]->album->name }}</h4>

        <h1 class="song">{{ $tracks[0]->name }}</h1>
        <p>{{ $tracks[0]->ponderatedReproductions }} ponderated times reproduced <br>
            {{ $tracks[0]->reproductions }} times reproduced</p>
        <div class="byAuthor">
            By <a href="#">{{ $tracks[0]->artists[0]->name }}</a>
            &middot;
            Duration {{ gmdate('i:s', $tracks[0]->duration_ms / 1000) }}
        </div>

        <audio controls>
            <source src="{{ $tracks[0]->preview_url }}">
        </audio>


    </div>

    <div class="col-lg-7">
        <table>

            <thead>
            <th>#</th>
            <th>SONG</th>
            <th>ARTIST</th>
            <th>REPRODUCTIONS</th>
            <th></th>

            </thead>

            <tbody>
            @foreach($tracks as $indexKey => $a_track)
                @if($indexKey > 0 && $indexKey < 50)
                    <tr>
                        <td>{{ $indexKey + 1 }}</td>
                        <td>
                            <img class="img-fluid rounded" src="{{ $a_track->album->images[2]->url }}">
                            {{ $a_track->name }}
                        </td>
                        <td>{{ $a_track->artists[0]->name  }}</td>
                        <td> Reproduced {{ $a_track->reproductions }} Times</td>
                        <td>
                            <audio controls>
                                <source src="{{ $a_track->preview_url }}">
                            </audio>
                        </td>
                    </tr>
                @endif

            @endforeach
            </tbody>
        </table>
    </div>
</div>



