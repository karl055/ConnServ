var inputservice = {
    ArtandCulture: ['Digital Art', 'Painting', 'Calligraphy'],
    BeautyandWellness: ['Personal Care', 'Exercises', 'Wellness and Alternatives'],
    Construction: ['Plumbing', 'Masonry', 'Special Construction'],
    Education: ['Training and Development', 'Educational Services'],
    Electronics: ['Computers', 'Communications', 'Cabling', 'Security and Protection'],
    Events: ['Photography', 'Party Planning Services', 'Memorial Services'],
    FoodandBeverages: ['Bars and Cafes', 'Catering', 'Bakeries', 'Restaurants'],
    MedicalCare: ['Animal Health', 'Health Care Facilities', 'Health Care Services'],
    ProfessionalServices: ['Interior Design Services', 'Engineering Services', 'Architectural Services'],
    ShoppingandRetail: ['Cooperative Buying', 'Malls', 'Luggage and Bags', 'Safety Gear and Equipment'],
    Transportation: ['Passenger Transport', 'Transportation Rental Services']
}

var main = document.getElementById('inputService');
var sub = document.getElementById('inputSubService');

main.addEventListener('change', function(){

    var selected_option = inputservice[this.value];

    while(sub.options.length > 0 ){

        sub.options.remove(0);
    }

    Array.from(selected_option).forEach(function(el){

        let option = new Option(el, el);

        sub.appendChild(option);
    });
});