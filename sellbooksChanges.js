var parser, xmlDoc;
let infoString = '<books><book><title>The Biology Coloring Book</title><author>Robert D. Griffin</author><edition>1st</edition><year>1986</year><price>16.18</price></book><book><title>Chemistry: A novel</title><author>Weike Wang</author><edition>1st</edition><year>2017</year><price>13.55</price></book>'+
'<book><title>Database Reliability Engineering</title><author>Laine Campbell and Charity Majors</author><edition>1st</edition><year>2017</year><price>38.43</price></book>'+
'<book><title>Eloquent JavaScript</title><author>Marijn Haverbeke</author><edition>3rd</edition><year>2018</year><price>27.34</price></book>'+
'<book><title>Web Design with HTML,CSS,JS and jQuery Set</title><author>Jon Duckett</author><edition>1st</edition><year>2014</year><price>32.13</price></book>'+
'<book><title>Introduction to Linear Algebra</title><author>Gilbert Strang</author><edition>5th</edition><year>2016</year><price>82.28</price></book>'+
"<book><title>Operating Systems: Three Easy Pieces</title><author>Remzi H Arpaci-Dusseau and Andrea C Arpaci-Dusseau</author><edition>1st</edition><year>2018</year><price>24.61</price></book><book><title>Fundamentals of Physics</title><author>R. Shankar</author><edition>1st</edition><year>2014</year><price>18.66</price></book><book><title>Beginner's Guide to Sculpting Characters in Clay</title><author>3dtotal Publishing</author><edition>1st</edition><year>2017</year><price>24.47</price></book><book><title>Web Programming Step by Step</title><author>Jessica Miller</author><edition>2nd</edition><year>2012</year><price>49.00</price></book></books>";
// the above text literal(or it was) was causing problems with xml dom traversal, removing the whitespace and assigning to that got rid of this problem. But it added not having any spaces anywhere including the text so I changed it back to regular one line strings concatenated
// infoString = infoString.replace(/\s/g, '');

parser = new DOMParser();
xmlDoc = parser.parseFromString(infoString,"text/xml");
let bookInfo = [];
let cart = [];
let prices= {};

console.log(xmlDoc);

for( var i =0; i< 10; i++) {
    let tempStr = ``;
    tempStr+= 'Title: '+ xmlDoc.getElementsByTagName('books')[0].childNodes[i].childNodes[0].childNodes[0].nodeValue+ '<br>';
    tempStr+= 'Author: '+ xmlDoc.getElementsByTagName('books')[0].childNodes[i].childNodes[1].childNodes[0].nodeValue+ '<br>';
    tempStr+= 'Edition: '+ xmlDoc.getElementsByTagName('books')[0].childNodes[i].childNodes[2].childNodes[0].nodeValue+ '<br>';
    tempStr+= 'Year: '+ xmlDoc.getElementsByTagName('books')[0].childNodes[i].childNodes[3].childNodes[0].nodeValue+ '<br>';
    let bookPrice = xmlDoc.getElementsByTagName('books')[0].childNodes[i].childNodes[4].childNodes[0].nodeValue;
    tempStr+= 'Price: '+ bookPrice+ '<br>';

    // using computed property name to store the prices and their respective book into an array for later retrieval
    let tempProp = 'book'+(i+1);
    console.log(tempProp);
    // prices.push({ [tempProp] : parseFloat(bookPrice)})
    // using an object instead of an array of objects, setting a new property for each book, with it's price as it's value
    prices[tempProp] = parseFloat(bookPrice);

    // for ( var j = 0; j< 5; j++) {
    //     console.log('helo');
    //     document.getElementById("XMLdemo").innerHTML +=
    //     xmlDoc.getElementsByTagName('books')[0].childNodes[i].childNodes[j].childNodes[0].nodeValue + '-';
    //     // xmlDoc.getElementsByTagName('books')[0].childNodes[i].childNodes[j].nodeName;


    // }
    // document.getElementById('XMLdemo').innerHTML += "<br/>";

    // document.getElementById('XMLdemo').innerHTML += '<hr>'+tempStr;
    bookInfo.push(tempStr);

}

console.log(prices);
console.log(bookInfo);

let imgs = ["bookImages\\Biobook.jpg", "bookImages\\chemBook.jpg", 'bookImages\\DBbook.jpg', 'bookImages\\JSbook1.jpg', 'bookImages\\JSbook2Set.jpg', 'bookImages\\LAbook.jpg', 'bookImages\\OSbook.jpg', 'bookImages\\PhysBook.jpg', 'bookImages\\Sculptingbook.jpg', 'bookImages\\WPLbook.jpg']

$(document).ready(function() {

    // src='' , the src here must have quotes even though ${imgs[i-1]} is a string for some reason, maybe it's not a string when taken like that
    for(let i = 1; i<= imgs.length; i++) {
        $(`#bookContainer .book:nth-child(${i})`).prepend(`<img width=200 height='auto' src='${imgs[i-1]}'/>`)
        console.log('other')
    }

    // the above adds the first image of the array again to the end for some reason so I remove it here
    // $('#bookContainer div:last-child').children().last().remove();sd

    // adding each book's info where it's image is
    let i = 0;
    $('.book').each(function(el){
        $(this).append(`<p>${bookInfo[i]}</p>`);
        i += 1;
    });

    // so that the radio box can be deselected
    $('input[type=radio]').click(function(){
        
        if(this.waschecked){
            this.checked = false;
            
        }

        this.waschecked = this.checked;
    })

});



// gets the currently selected books on the page
function getSelected() {

    let selected = [];
    $('input[type=radio]:checked').each(function(){

        selected.push($(this).attr('id'));
        console.log($(this).attr('id'))
        // if($(this).checked === true){
        //     selected.push($(this).attr('id'));
        //     console.log($(this).attr('id'))
        // }
    })
    console.log(selected);
    return selected;
}

// change opacity to hide the book partially, for when a book's radio box is selected
function opacity(id) {
    $(`input[id=${id}]`).parentsUntil($('#bookContainer')).toggleClass('reduceOpacity');
}

// for the button that adds currently selected to the user's cart
function fillCart() {
    let selected = getSelected();
    console.log('the following have been added to cart: '+selected);
    $('#added').remove(); // so there's no duplicates
    $('#addCart').after('<span id="added">Added to Cart.</span>') // tell user the items have been added

    // adds the book id fo all the selected books to our cart, using a tempcart to forget it's previous state
    let tempCart = []
    for(let sel of selected) {
        tempCart.push($('#'+sel).parent().parent().attr('id'));
    }
    cart = tempCart;
    console.log(cart);
}

console.log('helo')
// display the users cart

// function displayCart(prices){
//     displayCart2(prices);
// }
function displayCart() {
    // console.log(prices); 
    let total = 0.0;

    // console.log(total);
    console.log(cart);

    if(cart === undefined || cart.length ==0) return;

    // cart is already decided at this point if not empty, so we can determine the total price of the cart
    for(let i of cart){
        total+= prices[i];
    }

    console.log(total);

    let bookEnum={'book1':0,'book2':1,'book3':2,'book4':3, 'book5':4, 'book6':5, 'book7':6, 'book8':7, 'book9':8, 'book10':9};
    $('#cartContainer').append('<hr><h3>The items of you cart are below</h3>');

    for(let i of cart){
        $('#cartContainer').append(
            '<hr>'+
            bookInfo[bookEnum[i]]
            +'<hr>'
            );
    }
    $('#cartContainer').append(`<p>The total price of your cart is: ${total.toFixed(2)}</p>`+'<hr>')
    
}

