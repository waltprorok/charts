<script>

import {Bar} from 'vue-chartjs';

export default {
  extends: Bar,
  data() {
    return {
      url: 'http://127.0.0.1:8000/products',
      years: [],
      names: [],
      prices: [],
      data: ''
    }
  },
  methods: {
    getProducts() {
      axios.get(this.url).then((response) => {
        console.log(response.data);

        this.data = response.data;

        if (this.data) {
          this.data.forEach(element => {
            this.years.push(element.year);
            this.names.push(element.name);
            this.prices.push(element.price);
          });

          this.renderChart({
            labels: this.years,
            datasets: [
              {
                label: 'Sales',
                backgroundColor: '#0c28db',
                data: this.prices,
              }
            ]
          }, {
            responsive: true,
            maintainAspectRatio: false
          })

        } else {
          console.log("No Data");
        }
      });
    }
  },

  mounted() {
    this.getProducts();
  }
}
</script>
