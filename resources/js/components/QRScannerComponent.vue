<template>
    <div class="container">
        <h5>Scan Bike QR Code</h5>
        <br/>
            <qrcode-stream @decode="onDecode"></qrcode-stream>
        <br/>
        <label for="basic-url">or Enter Bike Serial</label>
        <div class="input-group mb-3">
              <input type="text" class="form-control" v-model="decodedContent" placeholder="Enter Bike Serial" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <br/>
        <button class="btn btn-primary mx-auto" @click="validateSerial()">Proceed</button>
        <br/>
        <br/>
        <a href="/lobby" class="btn btn-primary mx-auto">Skip</a>
    </div>
</template>

<script>
    import { QrcodeStream, QrcodeDropZone, QrcodeCapture } from 'vue-qrcode-reader'

    export default {
        mounted() {
            console.log('Component mounted.')
        },

         data: function() {
            return {
                decodedContent: '',

            }
        },

        components: {
            QrcodeStream,
            QrcodeDropZone,
            QrcodeCapture
        },

        methods: {
            onDecode (content) {
              this.decodedContent = content
            },

            validateSerial(){
              if(this.decodedContent.length > 0){
                   let bikeSerialCheckOrStoreUrl = '/api/bikes/store';
                   window.axios.post(
                        bikeSerialCheckOrStoreUrl,
                        {
                            serial_number: this.decodedContent
                        }
                   ).then(({ data }) => {
                        console.log(data);
                        if(data.status === 'ok'){
                            window.location = '/lobby?serial_number='+this.decodedContent;
                        }
                   }).catch(function (data) {
                        console.log(error)
                   })

              }  
            }
        }

    }
</script>
