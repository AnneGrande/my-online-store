<template>
  <div class="col-md-3">
    <div class="card">
      <img :src="image" :alt="name" class="card-img-top">
      <div class="card-body">
        <h4 class="card-title">{{ name }}</h4>
        <div class="card-text">{{ price | dollars }}</div>
        <div class="row justify-content-end">


          <!-- Trigger the modal with a button -->
          <button type="button" class="btn btn-info" data-toggle="modal" data-backdrop="false"
            data-target="#inVid">Read more</button>
          <div class="modal fade" id="inVid" role="dialog">
            <div class="modal-dialog modal-lg">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">

                  <p>I’ve had this vision of recycled kite for a while now. This is what I came up with 2008 GK V Sonic 11. Works like a charm! ♻️ </p>

                  <div style="overflow-x:auto;">
                    
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>


          <!-- Modal end-->

          <button class="btn btn-primary" @click="addToCart(invId)">Add to cart</button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { dollars } from './filters';
export default {
  name: 'item',
  props: ['invId', 'name', 'image', 'price'],
  filters: {
    dollars,
  },
  methods: {

    addToCart(invId) {
      this.$store.dispatch('addToCart', invId);
    },
  },
};
</script>



            