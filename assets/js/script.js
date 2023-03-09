const midiDiv = document.getElementById('midiDiv'); 
const soirDiv = document.getElementById('soirDiv');

    // listen date input
    const date = document.getElementById("date") 
    
    // after select date, show resMidi or resSoir
    date.addEventListener('input', function() {

      // split date delete "-" ==> format  ['2023', '03', '15']
      var myDate = date.value.split("-");
      var newDate = new Date( myDate[0], myDate[1] - 1, myDate[2]);
      $timestamp = newDate.getTime();
      const day = newDate.getDay($timestamp);
      console.log(day);
      if (day === 1) {
        // montrer que le soir
        midiDiv.style.display = 'none';
        soirDiv.style.display = 'block';
        alert('Ouvert que le soir');

      } else if ( day === 0) {
        //montrer que le matin
        soirDiv.style.display = 'none';
        midiDiv.style.display = 'block';
        alert('Ouvert que le midi');

      } else {
        //Monter les 2
        console.log('les 2');
        midiDiv.style.display = 'block';
        soirDiv.style.display = 'block';
      }
    })