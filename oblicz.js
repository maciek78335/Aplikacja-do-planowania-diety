function oblicz() 
{
    var wzrost = document.bmiKalkulator.wzrost.value;
    var waga = document.bmiKalkulator.waga.value;

    if(waga > 0 && wzrost > 0) {
        var result = waga/(wzrost/100*wzrost/100);
        document.bmiKalkulator.wynik.value = result.toFixed(2);
    
    if(result < 16){
        document.bmiKalkulator.suggestion.value = "wygłodzenie";
        }
         else if(result > 16 && result <= 16.99){
        document.bmiKalkulator.suggestion.value = "wychudzenie";
        }
         else if(result >= 17 && result <= 18.49){
        document.bmiKalkulator.suggestion.value = "niedowaga";
        }
        else if(result >= 18.5 && result <= 24.99){
            document.bmiKalkulator.suggestion.value = "wartość prawidłowa";
        }
        else if(result >= 25 && result <= 29.99){
            document.bmiKalkulator.suggestion.value = "nadwaga";
        }
        else if(result >= 30 && result <= 34.99){
            document.bmiKalkulator.suggestion.value = "I stopień otyłości";
        }
        else if(result >= 35 && result <= 39.99){
            document.bmiKalkulator.suggestion.value = "II stopień otyłości";
        } else if(result >= 40) {
            document.bmiKalkulator.suggestion.value = "otyłość skrajna";
        }

    }
     else {
        alert("Proszę wypełnij formularz poprawnie");
    }

}