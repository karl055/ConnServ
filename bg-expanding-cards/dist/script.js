const cards = [
  {title: 'Gooey PBJ Brownies', author: 'John Walibur', image: 'https://placeimg.com/640/480/nature'},
  {title: 'Crisp Spanish Tortilla Matzo Brei', author: 'Colman Andrews', image: 'https://placeimg.com/640/480/animals'},
  {title: 'Grilled Shrimp with Lemon and Garlic', author: 'Celeste Mills', image: 'https://placeimg.com/640/480/arch'}
]

new Vue({
  el: '#app',
  data: {
    cards: cards,
    selectedCard: -1
  },
  methods: {
    hoverCard(selectedIndex) {
      this.selectedCard = selectedIndex
      this.animateCards()
    },
    animateCards () {
      this.cards.forEach((card, index) => {
        const direction = this.calculateCardDirection(index, this.selectedCard)
        TweenMax.to(
          this.$refs[`card_${index}`], 
          0.3, 
          {x: direction * 50}
        )
      })
    },
    calculateCardDirection (cardIndex, selectedIndex) {
      if(selectedIndex === -1) {
        return 0
      }
      
      const diff = cardIndex - selectedIndex
      return diff === 0 ? 0 : diff/Math.abs(diff)
    },
    isSelected (cardIndex) {
      return this.selectedCard === cardIndex
    }
  }
})