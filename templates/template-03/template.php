<div id="woo-chatbot-ball-container"  class=" woo-chatbot-<?php echo $qcld_woo_chatbot_theme;?>">    <div class="woo-chatbot-container">        <div class="woo-chatbot-product-container">            <div class="woo-chatbot-product-details">                <div class="woo-chatbot-product-image-col">                    <div id="woo-chatbot-product-image"></div>                </div>                <!--woo-chatbot-product-image-col-->                <div class="woo-chatbot-product-info-col">                    <div class="woo-chatbot-product-reload"></div>                    <div id="woo-chatbot-product-title" class="woo-chatbot-product-title"></div>                    <div id="woo-chatbot-product-price" class="woo-chatbot-product-price"></div>                    <div id="woo-chatbot-product-description" class="woo-chatbot-product-description"></div>                    <div id="woo-chatbot-product-quantity" class="woo-chatbot-product-quantity"></div>                    <div id="woo-chatbot-product-variable" class="woo-chatbot-product-variable"></div>                    <div id="woo-chatbot-product-cart-button" class="woo-chatbot-product-cart-button"></div>                </div>                <!--woo-chatbot-product-info-col-->                <a href="#" class="woo-chatbot-product-close"></a>            </div>            <!--            woo-chatbot-product-details-->        </div>        <!--        woo-chatbot-product-container-->        <div id="woo-chatbot-board-container" class="woo-chatbot-board-container">            <div class="woo-chatbot-header">                <h3> <?php if (get_option('qlcd_woo_chatbot_host') != '') {                        $welcomes = unserialize(get_option('qlcd_woo_chatbot_welcome'));                        echo $welcomes[0] . ' ' . get_option('qlcd_woo_chatbot_host');                    } ?>                </h3>            </div>            <!--woo-chatbot-header-->            <div class="woo-chatbot-ball-inner woo-chatbot-content">                <!-- only show on Mobile app -->                <?php if(isset($template_app) && $template_app=='yes'){?>                    <div class="woo-chatbot-cart-checkout-wrapper">                        <div id="woo-chatbot-cart-short-code">                        </div>                        <div id="woo-chatbot-checkout-short-code">                        </div>                    </div>                <?php } ?>                <div class="woo-chatbot-messages-wrapper">                    <ul id="woo-chatbot-messages-container" class="woo-chatbot-messages-container">                    </ul>                </div>            </div>            <div class="woo-chatbot-footer">                <div id="woo-chatbot-editor-container" class="woo-chatbot-editor-container">                    <input id="woo-chatbot-editor" class="woo-chatbot-editor" required placeholder="<?php echo randmom_message_handle(unserialize(get_option('qlcd_woo_chatbot_send_a_msg'))); ?>"                           >                    <button type="button" id="woo-chatbot-send-message" class="woo-chatbot-button"><?php _e('send', 'woochatbot'); ?></button>                </div>                <!--woo-chatbot-editor-container-->                <div class="woo-chatbot-tab-nav">                    <ul>                        <li><a class="woo-chatbot-operation-option" data-option="help" href=""></a></li>                        <li><a class="woo-chatbot-operation-option" data-option="support"  href=""></a></li>                        <li class="woo-chatbot-operation-active"><a class="woo-chatbot-operation-option" data-option="chat" href=""></a></li>                        <li><a class="woo-chatbot-operation-option" data-option="recent" href=""></a></li>                        <li>                            <a class="woo-chatbot-operation-option" data-option="cart" href="">                                <?php if (get_option('disable_woo_chatbot_cart_item_number') != 1) { ?> <span                                    id="woo-chatbot-cart-numbers"><?php echo $cart_items_number; ?></span> <?php } ?>                            </a>                        </li>                    </ul>                </div>                <!--woo-chatbot-tab-nav-->            </div>            <!--woo-chatbot-footer-->        </div>        <!--        woo-chatbot-board-container-->    </div></div>