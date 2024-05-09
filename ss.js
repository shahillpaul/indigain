// $.getJSON('data.json', function(data){
  // console.log(data)
//   data.preWorkout.forEach(item=>{
//     console.log(item.name)
//   })
// })

function prework(){
  $.getJSON('data.json', function(data){
    data.preWorkout.forEach(item=>{
      // console.log(item.name)

      const itemContainer = $('<div class="item">')
      const ic1 = $('<div class="item-img">')
      const img = $('<img>').attr({src: item.image},{alt: item.name})
      const h2 = $('<h2>').text(item.name)
      const h3 = $('<h3>').html(`${item.price} <i>${item.crossprice}</i>`)
      const btn = $('<div>').addClass('btn').attr('data-index', item.index)

      btn.append($('<h4>').text('Add to Cart'))
      itemContainer.append(ic1)
      ic1.append(img)
      itemContainer.append(h2,h3,btn)
      $('.pre-workout-items').append(itemContainer)
    })
  })

  $('#pre-workout').on('click', function(dets){
    if(dets.closest.classList.contains('pre-workout')){

    }
  })
}



prework()