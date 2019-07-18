<?php 
	class Estado {
		private $estado;
		
		/**
		* Construtor da classe, inicializa as propriedades.
		*/
		public function __construct(){
			$this->estado["Acre"] = array("sigla" =>'AC', "nome-por-extenso" =>'Acre', "capital" =>'Rio Branco', "regiao" =>'Norte');
			$this->estado["Alagoas"] = array("sigla" =>'AL', "nome-por-extenso" =>'Alagoas', "capital" =>'Maceió', "regiao" =>'Nordeste');
			$this->estado["Amapá"] = array("sigla" =>'AP', "nome-por-extenso" =>'Amapá', "capital" =>'Macapá', "regiao" =>'Norte');
			$this->estado["Amazonas"] = array("sigla" =>'AM', "nome-por-extenso" =>'Amazonas', "capital" =>'Manaus', "regiao" =>'Norte');
			$this->estado["Bahia"] = array("sigla" =>'BA', "nome-por-extenso" =>'Bahia', "capital" =>'Salvador', "regiao" =>'Nordeste');
			$this->estado["Ceará"] = array("sigla" =>'CE', "nome-por-extenso" =>'Ceará', "capital" =>'Fortaleza', "regiao" =>'Nordeste');
			$this->estado["Distrito Federal"] = array("sigla" =>'DF', "nome-por-extenso" =>'Distrito Federal', "capital" =>'Brasília', "regiao" =>'Centro-Oeste');
			$this->estado["Espírito Santo"] = array("sigla" =>'ES', "nome-por-extenso" =>'Espírito Santo', "capital" =>'Vitória', "regiao" =>'Sudeste');
			$this->estado["Goiás"] = array("sigla" =>'GO', "nome-por-extenso" =>'Goiás', "capital" =>'Goiânia', "regiao" =>'Centro-Oeste');
			$this->estado["Maranhão"] = array("sigla" =>'MA', "nome-por-extenso" =>'Maranhão', "capital" =>'São Luís', "regiao" =>'Nordeste');
			$this->estado["Mato Grosso"] = array("sigla" =>'MT', "nome-por-extenso" =>'Mato Grosso', "capital" =>'Cuiabá', "regiao" =>'Centro-Oeste');
			$this->estado["Mato Grosso do Sul"] = array("sigla" =>'MS', "nome-por-extenso" =>'Mato Grosso do Sul', "capital" =>'Campo Grande', "regiao" =>'Centro-Oeste');
			$this->estado["Minas Gerais"] = array("sigla" =>'MG', "nome-por-extenso" =>'Minas Gerais', "capital" =>'Belo Horizonte', "regiao" =>'Sudeste');
			$this->estado["Pará"] = array("sigla" =>'PA', "nome-por-extenso" =>'Pará', "capital" =>'Belém', "regiao" =>'Norte');
			$this->estado["Paraíba"] = array("sigla" =>'PB', "nome-por-extenso" =>'Paraíba', "capital" =>'João Pessoa', "regiao" =>'Nordeste');
			$this->estado["Paraná"] = array("sigla" =>'PR', "nome-por-extenso" =>'Paraná', "capital" =>'Curitiba', "regiao" =>'Sul');
			$this->estado["Pernambuco"] = array("sigla" =>'PE', "nome-por-extenso" =>'Pernambuco', "capital" =>'Recife', "regiao" =>'Nordeste');
			$this->estado["Piauí"] = array("sigla" =>'PI', "nome-por-extenso" =>'Piauí', "capital" =>'Teresina', "regiao" =>'Nordeste');
			$this->estado["Rio de Janeiro"] = array("sigla" =>'RJ', "nome-por-extenso" =>'Rio de Janeiro', "capital" =>'Rio de Janeiro', "regiao" =>'Sudeste');
			$this->estado["Rio Grande do Norte"] = array("sigla" =>'RN', "nome-por-extenso" =>'Rio Grande do Norte', "capital" =>'Natal', "regiao" =>'Nordeste');
			$this->estado["Rio Grande do Sul"] = array("sigla" =>'RS', "nome-por-extenso" => 'Rio Grande do Sul', "capital" =>'Porto Alegre', "regiao" =>'Sul');
			$this->estado["Rondônia"] = array("sigla" =>'RO', "nome-por-extenso" =>'Rondônia', "capital" =>'Porto Velho', "regiao" =>'Norte');
			$this->estado["Roraima"] = array("sigla" =>'RR', "nome-por-extenso" =>'Roraima', "capital" =>'Boa Vista', "regiao" =>'Norte');
			$this->estado["Santa Catarina"] = array("sigla" =>'SC', "nome-por-extenso" =>'Santa Catarina', "capital" =>'Florianópolis', "regiao" =>'Sul');
			$this->estado["São Paulo"] = array("sigla" =>'SP', "nome-por-extenso" =>'São Paulo', "capital" =>'São Paulo', "regiao" =>'Sudeste');
			$this->estado["Sergipe"] = array("sigla" =>'SC', "nome-por-extenso" =>'Sergipe', "capital" =>'Aracaju', "regiao" =>'Nordeste');
			$this->estado["Tocantins"] = array("sigla" =>'TO', "nome-por-extenso" =>'Tocantins', "capital" =>'Palmas', "regiao" =>'Norte');
		}
		
		
		public function busca($termo){
			$termoAjustado = $this->ajustaTermo($termo);
			foreach ($this->estado as $estado){
				$teste = $this->ajustaTermo($estado['nome-por-extenso']);
				if ($termoAjustado == $teste){
					return
					"<table>					
					<tr>
						<th> Sigla </th>
						<th> Nome por extenso </th>
						<th> Capital </th>
						<th> Região </th>
					</tr>
					
					<tr>
						<td> {$estado["sigla"]} </td>
						<td> {$estado["nome-por-extenso"]} </td>
						<td> {$estado["capital"]} </td>
						<td> {$estado["regiao"]} </td>
					</tr>
					</table>";
				}
			}
			return "<table>
					<tr>
						<td colspan='4'> O estado digitado não foi encontrado! </td>
					</tr>
					</table>";
		}
		
		private function ajustaTermo($termo){
			$comAcentos = array('à', 'á', 'â', 'ã', 'ä', 'å', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ñ', 'ò', 'ó', 'ô', 'õ', 'ö', 'ù', 'ü', 'ú', 'ÿ', 'À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ñ', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'O', 'Ù', 'Ü', 'Ú');
			$semAcentos = array('a', 'a', 'a', 'a', 'a', 'a', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'n', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'y', 'A', 'A', 'A', 'A', 'A', 'A', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'N', 'O', 'O', 'O', 'O', 'O', '0', 'U', 'U', 'U');
			$busca = strtolower(str_replace($comAcentos, $semAcentos, $termo));
			return $busca;
		}
	}