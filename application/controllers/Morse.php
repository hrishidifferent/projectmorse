<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Morse extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
		{
			$this->load->view('main');
		}

	public function codegenerate()
		{
			if(isset($_POST['stretr']))
				{
					$stee = $_POST['stretr'];

					if($stee == "")
						{
							$response = array('0671bc469f31a7f408956446bef25bca');

							echo json_encode($response);
						}else {
							$arraystring = implode($this->morseit($stee));
							$response = array('69f31a7f408956446bef25bc0671bc4a',$arraystring);
							
							echo json_encode($response);
						}
				}
		}

	public function morseit($stee)
		{
			$length = strlen($stee);

			$strarray = str_split($stee);

			for($i = 0 ; $i < $length ; $i++)
				{
					switch($strarray[$i])
						{
							case 'A':
								{
									$strarray[$i] = '._';
									continue;
								}
							case 'B':
								{
									$strarray[$i] = '_...';
									continue;
								}
							case 'C':
								{
									$strarray[$i] = '_._.';
									continue;
								}
							case 'D':
								{
									$strarray[$i] = '_..';
									continue;
								}
							case 'E':
								{
									$strarray[$i] = '.';
									continue;
								}
							case 'F':
								{
									$strarray[$i] = '.._.';
									continue;
								}
							case 'G':
								{
									$strarray[$i] = '__.';
										continue;
								}
								case 'H':
								{
									$strarray[$i] = '....';
									continue;
								}
								case 'I':
									{
										$strarray[$i] = '..';
										continue;
									}
								case 'J':
									{
										$strarray[$i] = '.___';
										continue;
									}
								case 'K':
									{
										$strarray[$i] = '_._';
										continue;
									}
								case 'L':
									{
										$strarray[$i] = '._..';
										continue;
									}
								case 'M':
									{
										$strarray[$i] = '__';
										continue;
									}
								case 'N':
									{
										$strarray[$i] = '_.';
										continue;
									}
								case 'O':
									{
										$strarray[$i] = '___';
											continue;
									}
									case 'P':
									{
										$strarray[$i] = '.__.';
										continue;
									}
									case 'Q':
										{
											$strarray[$i] = '__._';
											continue;
										}
									case 'R':
										{
											$strarray[$i] = '._.';
											continue;
										}
									case 'S':
										{
											$strarray[$i] = '...';
											continue;
										}
									case 'T':
										{
											$strarray[$i] = '_';
											continue;
										}
									case 'U':
										{
											$strarray[$i] = '.._';
											continue;
										}
									case 'V':
										{
											$strarray[$i] = '..._';
											continue;
										}
									case 'W':
										{
											$strarray[$i] = '.__';
												continue;
										}
										case 'X':
										{
											$strarray[$i] = '_.._';
											continue;
										}
										case 'Y':
											{
												$strarray[$i] = '_.__';
												continue;
											}
										case 'Z':
											{
												$strarray[$i] = '__..';
												continue;
											}
											case 'a':
												{
													$strarray[$i] = '._';
													continue;
												}
											case 'b':
												{
													$strarray[$i] = '_...';
													continue;
												}
											case 'c':
												{
													$strarray[$i] = '_._.';
													continue;
												}
											case 'd':
												{
													$strarray[$i] = '_..';
													continue;
												}
											case 'e':
												{
													$strarray[$i] = '.';
													continue;
												}
											case 'f':
												{
													$strarray[$i] = '.._.';
													continue;
												}
											case 'g':
												{
													$strarray[$i] = '__.';
														continue;
												}
												case 'h':
												{
													$strarray[$i] = '....';
													continue;
												}
												case 'i':
													{
														$strarray[$i] = '..';
														continue;
													}
												case 'j':
													{
														$strarray[$i] = '.___';
														continue;
													}
												case 'k':
													{
														$strarray[$i] = '_._';
														continue;
													}
												case 'l':
													{
														$strarray[$i] = '._..';
														continue;
													}
												case 'm':
													{
														$strarray[$i] = '__';
														continue;
													}
												case 'n':
													{
														$strarray[$i] = '_.';
														continue;
													}
												case 'o':
													{
														$strarray[$i] = '___';
															continue;
													}
													case 'p':
													{
														$strarray[$i] = '.__.';
														continue;
													}
													case 'q':
														{
															$strarray[$i] = '__._';
															continue;
														}
													case 'r':
														{
															$strarray[$i] = '._.';
															continue;
														}
													case 's':
														{
															$strarray[$i] = '...';
															continue;
														}
													case 't':
														{
															$strarray[$i] = '_';
															continue;
														}
													case 'u':
														{
															$strarray[$i] = '.._';
															continue;
														}
													case 'v':
														{
															$strarray[$i] = '..._';
															continue;
														}
													case 'w':
														{
															$strarray[$i] = '.__';
																continue;
														}
														case 'x':
														{
															$strarray[$i] = '_.._';
															continue;
														}
														case 'y':
															{
																$strarray[$i] = '_.__';
																continue;
															}
														case 'z':
															{
																$strarray[$i] = '__..';
																continue;
															}
										case '1':
											{
												$strarray[$i] = '.____';
												continue;
											}
										case '2':
											{
												$strarray[$i] = '..___';
												continue;
											}
										case '3':
											{
												$strarray[$i] = '...__';
												continue;
											}
										case '4':
											{
												$strarray[$i] = '...._';
												continue;
											}
										case '5':
											{
												$strarray[$i] = '.....';
													continue;
											}
											case '6':
											{
												$strarray[$i] = '_....';
												continue;
											}
											case '7':
												{
													$strarray[$i] = '__...';
													continue;
												}
											case '8':
												{
													$strarray[$i] = '___..';
													continue;
												}
											case '9':
												{
													$strarray[$i] = '____.';
													continue;
												}
											case '0':
												{
													$strarray[$i] = '_____';
													continue;
												}
											case ',':
												{
													$strarray[$i] = '__..__';
													continue;
												}
											case '.':
												{
													$strarray[$i] = '._._._';
													continue;
												}
											case '?':
												{
													$strarray[$i] = '..__..';
														continue;
												}
												case ';':
												{
													$strarray[$i] = '_._._.';
													continue;
												}
												case ':':
													{
														$strarray[$i] = '___...';
														continue;
													}
												case '/':
													{
														$strarray[$i] = '_.._.';
														continue;
													}
												case '-':
													{
														$strarray[$i] = '_...._';
														continue;
													}
												case '\'':
													{
														$strarray[$i] = '.____.';
														continue;
													}
												case '\"':
													{
														$strarray[$i] = '._.._.';
														continue;
													}
												case '(':
													{
														$strarray[$i] = '_.__.';
															continue;
													}
													case ')':
													{
														$strarray[$i] = '_.__._';
														continue;
													}
													case '=':
														{
															$strarray[$i] = '_..._';
															continue;
														}
													case '+':
														{
															$strarray[$i] = '._._.';
															continue;
														}
													case '*':
														{
															$strarray[$i] = '_.._';
															continue;
														}
													case '@':
														{
															$strarray[$i] = '.__._.';
															continue;
														}
													default:
													{
														$strarray[$i] = '$';
														continue;
													}
						}
				}
				return $strarray;
		}
}
