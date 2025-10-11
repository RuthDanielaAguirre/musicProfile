<?php
// Formatea el precio con 2 decimales y símbolo €
function formatPrice($num) {
    return number_format($num, 2, ',', '.') . " €";
}

// Calcula el total de inscripción + taller 
function calcTotal($inscripcion, $taller) {
    $resultado = $inscripcion + $taller;
    return formatPrice($resultado);
}

// ---------- Perfil ----------

// Renderiza perfil con nombre, stack y hobby
function renderProfile($profile) {
    $nombre = $profile["nombre"];
    $hobby  = $profile["hobby"];
    
    $stackHtml = "<ul>";
    foreach ($profile["stack"] as $technology) {
        $stackHtml .= "<li>$technology</li>";
    }
    $stackHtml .= "</ul>";

    return "
    <div class='profile-card'>
        <h1>$nombre</h1>
        <h3>Stack:</h3>
        $stackHtml
        <p>Hobby: $hobby</p>
    </div>
    ";
}

// ---------- Menú ----------

// Renderiza un plato
function renderMenu($menu) {
    $platillo = $menu["platillo"];
    $precio = formatPrice($menu["precio"]);

    return "
    <div class='menu-card'>
        <h1>$platillo</h1>
        <p>$precio</p>
    </div>
    ";
}

// Renderiza la lista de platos
function renderMenuList($menuArray) {
    $html = "<div class='menu-list'><h2>Menú favorito</h2><ul>";
    $totalMenu = 0;
    
    foreach ($menuArray as $item) {
        $platillo = $item["platillo"];
        $precio = formatPrice($item["precio"]);
        $html .= "<li>$platillo — $precio</li>";
        $totalMenu += $item["precio"];
    }

    $html .= "<p><strong>Total: " . formatPrice($totalMenu) . "</strong></p>";
    $html .= "</ul></div>";
    return $html;
}

// ---------- Música ----------

// Renderiza una sola canción
function renderMusic($song) {
    $title = $song["title"];
    $artist = $song["artist"];

    return "
    <div class='music-card'>
        <h2>$title</h2>
        <p>$artist</p>
    </div>
    ";
}

// Renderiza la playlist
function renderMusicList($musicArray) {
    $html = "<div class='music-list'><h2>Playlist</h2>";

    foreach ($musicArray as $song) {
        $html .= renderMusic($song);
    }

    $html .= "</div>";
    return $html;
}

// ---------- Películas ----------

// Renderiza una sola película
function renderMovie($film) {
    $title = $film["title"];
    $min   = $film["min"];

    return "
    <div class='movie-card'>
        <h1>$title</h1>
        <p>$min min</p>
    </div>
    ";
}

// Renderiza lista de películas + total de minutos
function renderMovies($movies) {
    $html = "<div class='movies-list'><h2>Maratón de películas</h2>";

    $totalMin = 0;

    foreach ($movies as $film) {
        $html .= renderMovie($film);  
        $totalMin += $film["min"];
    }

    $html .= "<p><strong>Total: $totalMin min en " . count($movies) . " películas</strong></p>";
    $html .= "</div>";
    return $html;
}

// ---------- Evento ----------

// Renderiza coste del evento con inscripción + taller + total
function renderEvent($inscripcion, $taller) {
    $total = calcTotal($inscripcion, $taller);

    return "
    <div class='event-card'>
        <h2>Coste del Evento</h2>
        <p>Inscripción: " . formatPrice($inscripcion) . "</p>
        <p>Taller: " . formatPrice($taller) . "</p>
        <p><strong>Total: $total</strong></p>
    </div>
    ";
}

// ---------- Viaje ----------

// Renderiza un próximo viaje
function renderTrip($trip) {
    $destino = $trip["destino"];
    $dias    = $trip["dias"];

    return "
    <div class='trip-card'>
        <h2>Próximo viaje</h2>
        <p>Mi próximo viaje será a <strong>$destino</strong>, durante $dias días.</p>
    </div>
    ";
}
?>
