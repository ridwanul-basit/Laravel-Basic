{{-- <div>
    <!-- I have not failed. I've just found 10,000 ways that won't work. - Thomas Edison -->
</div> --}}

<html>
    <body>
        <h1>This about section</h1>
        <h2>{{ $name }}</h2>
        <h2>{{ $id }}</h2>

        @for($i=1;$i<=10;$i++)
          <p>{{ $i }}</p>
        @if( ($i%2==0))
        <h1>{{ $i }}</h1>
        @endif 
        @endfor
    </body>
</html>