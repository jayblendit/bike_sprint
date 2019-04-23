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
        <a href="#" class="btn btn-primary mx-auto">Proceed</a>
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
        }

    }
</script>
