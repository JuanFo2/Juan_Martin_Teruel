public function index($nombre, Request $req)
    {
        echo "hola";
        dump($nombre);
        return view ("saludo")
            -> with("hola", $nombre);
    }
