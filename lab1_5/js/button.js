document.getElementById('dropdown-btn').addEventListener('click', function() {
    var element = document.querySelector('.dropdown-container');
    if (element.style.display === 'none') {
      element.style.display = 'block';
    } else {
      element.style.display = 'none';
    }
  });
  function toggleContent(elementId) {
    var elements = ["academy_h", "necropolis_h", "dungeon_h", "sylvan_h", "haven_h", "inferno_h", "stronghold_h", "fortress_h"];

    elements.forEach(function(item) {
        var ukrytyKontent = document.getElementById(item);
        if (item === elementId + "_h") {
            ukrytyKontent.style.display = (ukrytyKontent.style.display === "none" || ukrytyKontent.style.display === "") ? "flex" : "none";
        } else {
            ukrytyKontent.style.display = "none";
        }
    });
}

document.getElementById("academy").addEventListener("click", function() {
    toggleContent("academy");
});

document.getElementById("necropolis").addEventListener("click", function() {
    toggleContent("necropolis");
});

document.getElementById("dungeon").addEventListener("click", function() {
    toggleContent("dungeon");
});

document.getElementById("sylvan").addEventListener("click", function() {
    toggleContent("sylvan");
});

document.getElementById("haven").addEventListener("click", function() {
    toggleContent("haven");
});

document.getElementById("inferno").addEventListener("click", function() {
    toggleContent("inferno");
});

document.getElementById("stronghold").addEventListener("click", function() {
    toggleContent("stronghold");
});

document.getElementById("fortress").addEventListener("click", function() {
    toggleContent("fortress");
});