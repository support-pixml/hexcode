<?php
class ControllerCheckoutSuccess extends Controller {
	public function index() {
		$this->load->language('checkout/success');

		if (isset($this->session->data['order_id'])) {
			$this->cart->clear();

			$order_id = $this->session->data['order_id'];

			unset($this->session->data['shipping_method']);
			unset($this->session->data['shipping_methods']);
			unset($this->session->data['payment_method']);
			unset($this->session->data['payment_methods']);
			unset($this->session->data['guest']);
			unset($this->session->data['comment']);
			unset($this->session->data['order_id']);
			unset($this->session->data['coupon']);
			unset($this->session->data['reward']);
			unset($this->session->data['voucher']);
			unset($this->session->data['vouchers']);
			unset($this->session->data['totals']);
		}
	
		// $order_id = 20;
		$data['order_id'] = $order_id;
		if(!isset($order_id))
		$this->response->redirect($this->url->link('common/home', '', 'SSL'));

		$this->load->model('checkout/order');
		$this->load->model('journal3/product');
		$this->load->model('tool/image');

		$order_data = $this->model_checkout_order->getOrder($order_id);
		$order_data['payment_firstname'] = ucwords($order_data['payment_firstname']);
		$order_data['payment_lastname'] = ucwords($order_data['payment_lastname']);

		$order_products = $this->model_checkout_order->getOrderProducts($order_id);		
		
		$order_data['total'] = (float)$order_data['total'];
		$data['order_data'] = $order_data;
		for($i=0; $i < count($order_products); $i++)
		{
			$order_products_options = $this->model_checkout_order->getOrderOptions($order_id, $order_products[$i]['order_product_id']);
			$order_products[$i]['option'] = $order_products_options;
			$product_img = $this->model_journal3_product->getProduct($order_products[$i]['product_id']);
			$order_products[$i]['image'] = $product_img[$order_products[$i]['product_id']]['image'];
			if ($order_products[$i]['image']) {
				$order_products[$i]['image'] = $this->model_tool_image->resize($order_products[$i]['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_cart_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_cart_height'));
			} else {
				$order_products[$i]['image'] = '';
			}
			$order_products[$i]['href'] = $this->url->link('product/product', 'product_id=' . $order_products[$i]['product_id']);
			$order_products[$i]['price'] = (float)$order_products[$i]['price'];
			$order_products[$i]['total'] = (float)$order_products[$i]['total'];
		}
		// echo '<pre>'; print_r($order_products); echo '</pre>';die;
		$data['order_products'] = $order_products;

		$this->document->setTitle($this->language->get('heading_title'));

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_basket'),
			'href' => $this->url->link('checkout/cart')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_checkout'),
			'href' => $this->url->link('checkout/checkout', '', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_success'),
			'href' => $this->url->link('checkout/success')
		);

		if ($this->customer->isLogged()) {
			$data['text_message'] = sprintf($this->language->get('text_customer'), $this->url->link('account/account', '', true), $this->url->link('account/order', '', true), $this->url->link('account/download', '', true), $this->url->link('information/contact'));
		} else {
			$data['text_message'] = sprintf($this->language->get('text_guest'), $this->url->link('information/contact'));
		}

		$data['continue'] = $this->url->link('common/home');

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$data['name'] = $this->config->get('config_name');

		if ($this->request->server['HTTPS']) {
			$server = $this->config->get('config_ssl');
		} else {
			$server = $this->config->get('config_url');
		}

		if (is_file(DIR_IMAGE . $this->config->get('config_logo'))) {
			$data['logo'] = $server . 'image/' . $this->config->get('config_logo');
		} else {
			$data['logo'] = '';
		}	

		$data['home'] = $this->url->link('common/home');

		$this->response->setOutput($this->load->view('common/success', $data));
	}
}