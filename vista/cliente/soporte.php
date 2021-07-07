<div class="row">
        <div class="col">
          <div class="card shadow">
            <div class="card-header bg-transparent">
              <h3 class="mb-0">Soporte</h3>
            </div>
            <div class="card-body">

              <form method="POST" action="/plantillas/themes/nueva-2018-v3/chat.php" class="tm-livechat-form">					   
                 <div class="tm-livechat-header"><p class="tm-livechat-title">Chat</p><a href="#close" class="tm-livechat-btn tm-livechat-btn-close"></a></div>					   
                  <div class="tm-livechat-content">
                    <div class="tm-livechat-text"><p id="p11"> - Bienvenido al Chat de Zara.</p>
                      <p id="p22">¿En qué podemos ayudarle?.</p>
                      <p><textarea style="width:100%; line-height:25px" rows="1" name="question" id="question" class="chat-question" placeholder="Escriba su consulta" value="" required=""></textarea>
                        <input type="button" id="proceed" style="float:right; margin-top:5px; color:white" class="tm-livechat-btn-start" value="Contactar" onclick="listener()">
                        <input type="text" name="nick" id="nick" class="chat-name" placeholder="Su nombre" value="" style="display:none" required=""><input type="email" name="email" id="email" class="chat-mail" placeholder="Su e-mail" value="" style="display:none" required="">
                        <input type="text" name="affID" id="affID" value="ctwplant" style="display:none">
                        <input type="text" name="presetCode" id="presetCode" value="OsQP6QpRFPXwitJJrfc1CiE03c3vhS" style="display:none">
                        <input type="text" name="productType" id="productType" value="undefined" style="display:none">
                        <input type="text" name="templateId" id="templateId" value="undefined" style="display:none"></p></div>
                        <input type="button" id="goback" style="float:left; color:#8a1252; display:none" class="tm-livechat-btn-start" value="Volver" onclick="gobackf()">
                        <input type="submit" id="submit" style="float:right; display:none" class="tm-livechat-btn-start" value="Start Chat"></div></form>
            </div>
            </div>
          </div>
        </div>