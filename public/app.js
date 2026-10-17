const typeRadios = document.querySelectorAll('input[name="type"]');
const typeFieldGroups = document.querySelectorAll('.type-fields');

function showFieldsForType(selectedType) {
  typeFieldGroups.forEach(function (group) {
    group.hidden = group.dataset.type !== selectedType;
  });
}

typeRadios.forEach(function (radio) {
  radio.addEventListener('change', function () {
    showFieldsForType(radio.value);
  });
});

// Au chargement : aucun type choisi, donc on cache tous les groupes
showFieldsForType(null);