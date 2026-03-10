<section id="marcas" class="py-24 bg-gradient-to-b from-white to-gray-50">
  <div class="max-w-7xl mx-auto px-6">

    <!-- TÍTULO -->
    <div class="text-center mb-16">
      <h2 class="text-4xl md:text-5xl font-extrabold text-primary mb-5">
        Marcas que Atendemos
      </h2>

      <p class="text-lg text-gray-600 max-w-4xl mx-auto leading-relaxed">
        En nuestro Centro de Asistencia Técnica trabajamos con una amplia variedad
        de marcas reconocidas, entregando soporte técnico, reparación y atención
        especializada en garantía y servicio multimarca.
      </p>
    </div>

    <!-- LISTA DE MARCAS -->
    <?php
      $marcas = [
        "Toyotomi",
        "Corona",
        "Sumoheat",
        "Gama",
        "Braun",
        "Philips",
        "Nex",
        "Daewoo",
        "BGH",
        "ONN",
        "Blik",
        "Groven",
        "Groven Pro",
        "Maccarthy",
        "Polaroid",
        "Loven",
        "Brookstone",
        "Trotec",
        "Electro Blendtec",
        "Huron",
        "Nutribullet",
        "Hamilton Beach",
        "Sumo",
        "Keroheat",
        "Ankarsrum",
        "HKC",
        "Anwo",
        "Audio Technica",
        "Blitz",
        "Excalibur",
        "Main Stays",
        "Hyper Tough",
        "Ozark Trail",
        "Klauben",
        "Krobel",
        "Motor Life",
        "Robust",
        "Nura / Ritter",
        "Omega",
        "Orbis",
        "Retmax",
        "Hyundai"
      ];
    ?>

    <div class="flex flex-wrap justify-center gap-4 max-w-6xl mx-auto">

      <?php foreach ($marcas as $marca): ?>
        <span
          class="px-6 py-3 rounded-full bg-white shadow-md border border-gray-200
                 text-gray-800 font-semibold tracking-wide
                 hover:bg-primary hover:text-white hover:shadow-xl
                 transition transform hover:-translate-y-1"
        >
          <?= $marca ?>
        </span>
      <?php endforeach; ?>

    </div>

    <!-- MENSAJE FINAL -->
    <div class="mt-20 text-center">
      <p class="text-gray-600 text-lg max-w-3xl mx-auto">
        ¿Tu marca no aparece aquí?  
        <span class="font-semibold text-primary">
          No te preocupes, también reparamos equipos de todas las marcas del mercado.
        </span>
      </p>
    </div>

  </div>
</section>





