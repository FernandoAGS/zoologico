package AnimalesZologicos;

public class AnimalAcuatico extends Animal {
	
	private String Tipo_Ambiente;
	private int Canti_aleta;
	private int nivel_agresion;
	
	//CONSTRUCTOR
	public AnimalAcuatico() {
		super();
		// TODO Auto-generated constructor stub
	}
	public AnimalAcuatico(String _tipo,String _Nombre, String _Pais, String _Fecha_ingreso,String _tipo_ambiente,int _canti_aleta, int _nivel_agresion) {
		super(_tipo,_Nombre, _Pais, _Fecha_ingreso);
		this.Tipo_Ambiente = _tipo_ambiente;
		this.Canti_aleta = _canti_aleta;
		this.nivel_agresion = _nivel_agresion;
		// TODO Auto-generated constructor stub
	}
	//SETTERS GETTERS
	public String getTipo_Ambiente() {
		return Tipo_Ambiente;
	}
	public void setTipo_Ambiente(String tipo_Ambiente) {
		Tipo_Ambiente = tipo_Ambiente;
	}
	public int getCanti_aleta() {
		return Canti_aleta;
	}
	public void setCanti_aleta(int canti_aleta) {
		Canti_aleta = canti_aleta;
	}
	public String getNivel_agresion() {
		if(this.nivel_agresion==1) {
			 return "el animal es pasivo";
		}
		else if(this.nivel_agresion==2) {
			return "el nivel de agresion es medio";
		}
		else {
			return "el nivel de agresion es Activo";
		}
	}
	public void setNivel_agresion(int nivel_agresion) {
		this.nivel_agresion = nivel_agresion;
	}
	//TOstring
	@Override
	public String toString() {
		return "AnimalAcuatico [Tipo_Ambiente=" + Tipo_Ambiente + ", Canti_aleta=" + Canti_aleta + ", nivel_agresion="
				+ nivel_agresion + super.toString()+"]";
	}
	
	
	
	

}